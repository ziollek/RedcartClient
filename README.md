RedcartClient
=============

Redcart Api PHP Client - easy objective way to use redcart api


## Supported modules

This lib supports listed bellow modules:
- hello
- products
- customers
- customersAddress
- orders
- ordersToProducts
- categories
- productsToCategories
- producers
- gallery

## Fetch products example

        $redcart = \RedcartClient\Setup::getRedcart('[API_KEY]');

        /** @var \RedcartClient\Modules\Products\Module $productsModule */
        $productsModule = $redcart->getModule('products');

        #fetch products without any filters with offset=0, limit=10
        $products = $productsModule->select(array(), 0, 10);

        #fetch products with name='Sample name' with offset=0, limit=10
        $products = $productsModule->select(array('name' => 'Sample name'), 0, 10);


## Add product example

        $redcart = \RedcartClient\Setup::getRedcart('[API_KEY]');

        /** @var \RedcartClient\Modules\Products\Module $productsModule */
        $productsModule = $redcart->getModule('products');

        $product = new \RedcartClient\Resources\Products\Product();
        $product->setName('New product');
        $product->setPrice(123.0);
        $product->setTaxValue(1.23);

        $product = $productsModule->add($product);
        echo 'Added product id: ' . $product->getProductsId().PHP_EOL;


## Running examples

1. Install composer: php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"
2. Install dependencies: ./composer.phar install
3. run demo script: php demo/demo.php [YOUR_API_KEY]

