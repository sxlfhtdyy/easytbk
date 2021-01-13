<?php

    namespace Dml\EasyTBK\PinDuoDuo\Request;

    use Dml\EasyTBK\PinDuoDuo\RequestInterface;


    class DdkGoodsRecommendGetRequest implements RequestInterface
    {

        private $type = 'pdd.ddk.goods.recommend.get';

        /**
         * @JsonProperty(Long, "cat_id")
         */
        private $catId;

        /**
         * @JsonProperty(Integer, "channel_type")
         */
        private $channelType;

        /**
         * @JsonProperty(String, "custom_parameters")
         */
        private $customParameters;

        /**
         * @JsonProperty(List<Long>, "goods_ids")
         */
        private $goodsIds;

        /**
         * @JsonProperty(List<String>, "goods_sign_list")
         */
        private $goodsSignList;

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
         * @JsonProperty(String, "pid")
         */
        private $pid;

        public function setCatId($catId)
        {
            $this->catId = $catId;
        }

        public function setChannelType($channelType)
        {
            $this->channelType = $channelType;
        }

        public function setCustomParameters($customParameters)
        {
            $this->customParameters = $customParameters;
        }

        public function setGoodsIds($goodsIds)
        {
            $this->goodsIds = $goodsIds;
        }

        public function setGoodsSignList($goodsSignList)
        {
            $this->goodsSignList = $goodsSignList;
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

        public function setPid($pid)
        {
            $this->pid = $pid;
        }

        public function getParams()
        {
            $params = [
                'type' => $this->type,
                'cat_id' => $this->catId,
                'channel_type' => $this->channelType,
                'custom_parameters' => $this->customParameters,
                'goods_ids' => $this->goodsIds,
                'goods_sign_list' => $this->goodsSignList,
                'limit' => $this->limit,
                'list_id' => $this->listId,
                'offset' => $this->offset,
                'pid' => $this->pid,
            ];
            return array_filter($params, function ($v) {
                if ($v || $v === false) {
                    return true;
                }
            });
        }
    }
