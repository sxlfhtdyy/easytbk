<?php

    namespace Dml\EasyTBK\PinDuoDuo\Request;

    use Dml\EasyTBK\PinDuoDuo\RequestInterface;


    class DdkGoodsDetailRequest implements RequestInterface
    {
        /**
         * 查询多多进宝商品详情
         * @var string
         */
        private $type = 'pdd.ddk.goods.detail';

        /**
         * @JsonProperty(String, "custom_parameters")
         */
        private $customParameters;

        /**
         * @JsonProperty(List<Long>, "goods_id_list")
         */
        private $goodsIdList;

        /**
         * @JsonProperty(String, "pid")
         */
        private $pid;

        /**
         * @JsonProperty(Integer, "plan_type")
         */
        private $planType;

        /**
         * @JsonProperty(String, "search_id")
         */
        private $searchId;

        /**
         * @JsonProperty(Long, "zs_duo_id")
         */
        private $zsDuoId;

        /**
         * @JsonProperty(String, "goods_sign")
         */
        private $goodsSign;


        public function setCustomParameters($customParameters)
        {
            $this->customParameters = $customParameters;
        }

        public function setGoodsIdList($goodsIdList)
        {
            $this->goodsIdList = $goodsIdList;
        }

        public function setPid($pid)
        {
            $this->pid = $pid;
        }

        public function setPlanType($planType)
        {
            $this->planType = $planType;
        }

        public function setSearchId($searchId)
        {
            $this->searchId = $searchId;
        }

        public function setZsDuoId($zsDuoId)
        {
            $this->zsDuoId = $zsDuoId;
        }

        public function setGoodsSign($goodsSign)
        {
            $this->goodsSign = $goodsSign;
        }

        public function getParams()
        {
            return [
                'type' => $this->type,
                'goods_id_list' => $this->goodsIdList,
                'goods_sign' => $this->goodsSign,
                'custom_parameters' => $this->customParameters,
                'pid' => $this->pid,
                'search_id' => $this->searchId,
                'zs_duo_id' => $this->zsDuoId,
            ];
        }
    }