<?php

    namespace Dml\EasyTBK\PinDuoDuo\Request;

    use Dml\EasyTBK\PinDuoDuo\RequestInterface;


    class DdkTopGoodsListQueryRequest implements RequestInterface
    {
        /**
         * 获取热销商品列表
         * @var string
         */
        private $type = 'pdd.ddk.top.goods.list.query';

        /**
         * @JsonProperty(String, "custom_parameters")
         */
        private $customParameters;

        /**
         * @JsonProperty(Integer, "limit")
         */
        private $limit;

        /**
         * @JsonProperty(String, "list_id")
         */
        private $listId;

        /**
         * @JsonProperty(Integer, "offset")
         */
        private $offset;

        /**
         * @JsonProperty(String, "p_id")
         */
        private $pId;

        /**
         * @JsonProperty(Integer, "sort_type")
         */
        private $sortType;

        public function setCustomParameters($customParameters)
        {
            $this->customParameters = $customParameters;
        }

        public function setLimit($limit)
        {
            $this->limit = $limit;
        }

        public function setListId($listId)
        {
            $this->listId = $listId;
        }

        public function setOffset($offset)
        {
            $this->offset = $offset;
        }

        public function setPId($pId)
        {
            $this->pId = $pId;
        }

        public function setSortType($sortType)
        {
            $this->sortType = $sortType;
        }

        public function getParams()
        {
            $params = [
                'type' => $this->type,
                'limit' => $this->limit,
                'list_id' => $this->listId,
                'offset' => $this->offset,
                'p_id' => $this->pId,
                'sort_type' => $this->sortType,
                'custom_parameters' => $this->customParameters,
            ];

            return array_filter($params);
        }
    }
