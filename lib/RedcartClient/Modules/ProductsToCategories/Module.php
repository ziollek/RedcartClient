<?php

namespace RedcartClient\Modules\ProductsToCategories;

use RedcartClient\Api\Client;
use RedcartClient\Modules\CrudModule;
use RedcartClient\Resources\Products\ProductCategory;

class Module extends CrudModule {

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        parent::__construct($client, true);
    }

    /**
     * @return string
     */
    protected function getResourceClass()
    {
        return '\\RedcartClient\\Resources\\Products\\ProductCategory';
    }

    /**
     * @return string
     */
    protected function getPkField()
    {
        throw new \RuntimeException('Multi field pk');
    }

    /**
     * @param Resource|\Resource[] $resources
     * @param array $options
     * @return Resource|\Resource[]|void
     *
     * @throws \InvalidArgumentException
     */
    public function update($resources, $options = array())
    {
        throw new \InvalidArgumentException('Operation not permitted');
    }

    /**
     * @param ProductCategory[] $productsCategories
     *
     * @return int
     */
    public function delete($productsCategories)
    {
        $resultCount = 0;
        $categoriesToDelete = array();
        foreach($productsCategories as $productCategory) {
            if (!isset($categoriesToDelete[$productCategory->getCategoriesId()])) {
                $categoriesToDelete[$productCategory->getCategoriesId()] = array();
            }
            $categoriesToDelete[$productCategory->getCategoriesId()][] = $productCategory->getProductsId();
        }

        if (count($categoriesToDelete) > 0) {
            $postData = $this->getPostData('delete');
            foreach ($categoriesToDelete as $categoryId => $productsIds) {
                $postData['parameters'] = array(
                    'categories_id' => $categoryId,
                    'products_id' => $productsIds
                );

                $response = $this->client->call($postData);
                $resultCount += $response['count'];
            }
        }

        return $resultCount;
    }


}