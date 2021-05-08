<?php

namespace Theme\Main\Http\Controllers;

use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\Theme\Http\Controllers\PublicController;
use Theme;

class MainController extends PublicController
{
    /**
     * {@inheritDoc}
     */
    public function getIndex(BaseHttpResponse $response)
    {
        return Theme::scope('index')->render();
    }

    /**
     * {@inheritDoc}
     */
    public function getView(BaseHttpResponse $response, $key = null)
    {
        return parent::getView($response, $key);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteMap()
    {
        return parent::getSiteMap();
    }
       /**
     * {@inheritDoc}
     */
    public function getproducts(BaseHttpResponse $response)
    {
        return Theme::scope('products')->render();
    }
    public function getabout(BaseHttpResponse $response)
    {
        return Theme::scope('about-us-2')->render();
    }
    public function getabout1(BaseHttpResponse $response)
    {
        return Theme::scope('about-us')->render();
    }
    public function getblog2(BaseHttpResponse $response)
    {
        return Theme::scope('blog-2')->render();
    }
    public function getblogpost2(BaseHttpResponse $response)
    {
        return Theme::scope('blog-post-2')->render();
    }
   
    public function getblogpost(BaseHttpResponse $response)
    {
        return Theme::scope('blog-post')->render();
    }
    public function getblog(BaseHttpResponse $response)
    {
        return Theme::scope('blog')->render();
    }
    public function getcart2(BaseHttpResponse $response)
    {
        return Theme::scope('cart-2')->render();
    }
    public function getcart(BaseHttpResponse $response)
    {
        return Theme::scope('cart')->render();
    }
    public function getcontact2(BaseHttpResponse $response)
    {
        return Theme::scope('contact-us-2')->render();
    }
    public function getcontact(BaseHttpResponse $response)
    {
        return Theme::scope('contact-us')->render();
    }
    public function gethelp(BaseHttpResponse $response)
    {
        return Theme::scope('help')->render();
    }
   
    public function  getindex2(BaseHttpResponse $response)
    {
        return Theme::scope('index-2')->render();
    }
    public function  getpage2(BaseHttpResponse $response)
    {
        return Theme::scope('page-not-found-2')->render();
    }
    public function  getpage(BaseHttpResponse $response)
    {
        return Theme::scope('page-not-found')->render();
    }
    public function  getproduct2(BaseHttpResponse $response)
    {
        return Theme::scope('product-2')->render();
    }
     public function  getproduct(BaseHttpResponse $response)
    {
        return Theme::scope('product')->render();
    }
    
    public function  getproducts2(BaseHttpResponse $response)
    {
        return Theme::scope('products-2')->render();
    }
   
    public function gettemplate(BaseHttpResponse $response)
    {
        return Theme::scope('template-guide')->render();
    }
}
