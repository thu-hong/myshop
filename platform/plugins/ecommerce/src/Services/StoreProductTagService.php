<?php

namespace Platform\Ecommerce\Services;

use Platform\Base\Events\CreatedContentEvent;
use Platform\Ecommerce\Models\Product;
use Platform\Ecommerce\Repositories\Interfaces\ProductTagInterface;
use Illuminate\Http\Request;

class StoreProductTagService
{

    /**
     * @var ProductTagInterface
     */
    public $productTagRepository;

    /**
     * StoreTagService constructor.
     * @param ProductTagInterface $productTagRepository
     */
    public function __construct(ProductTagInterface $productTagRepository)
    {
        $this->productTagRepository = $productTagRepository;
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return mixed|void
     */
    public function execute(Request $request, Product $product)
    {
        $tags = $product->tags->pluck('name')->all();

        $tagsInput = collect(json_decode($request->input('tag'), true))->pluck('value')->all();

        if (count($tags) != count($tagsInput) || count(array_diff($tags, $tagsInput)) > 0) {
            $product->tags()->detach();
            foreach ($tagsInput as $tagName) {

                if (!trim($tagName)) {
                    continue;
                }

                $tag = $this->productTagRepository->getFirstBy(['name' => $tagName]);

                if ($tag === null && !empty($tagName)) {
                    $tag = $this->productTagRepository->createOrUpdate(['name' => $tagName]);

                    $request->merge(['slug' => $tagName]);

                    event(new CreatedContentEvent(PRODUCT_TAG_MODULE_SCREEN_NAME, $request, $tag));
                }

                if (!empty($tag)) {
                    $product->tags()->attach($tag->id);
                }
            }
        }
    }
}