<?php

    namespace Dml\EasyTBK\PinDuoDuo\Request;

    use Dml\EasyTBK\PinDuoDuo\RequestInterface;


    class DdkOrderListIncrementGetRequest implements RequestInterface
    {
        /**
         * 按照时间段获取授权多多客下面所有多多客的推广订单信息
         * @var string
         */
        private $type = 'pdd.ddk.order.list.increment.get';

        /**
         * @JsonProperty(BOOLEAN, "cash_gift_order")
         */
        private $cashGiftOrder;


        /**
         * @JsonProperty(Long, "end_update_time")
         */
        private $endUpdateTime;

        /**
         * @JsonProperty(Integer, "page")
         */
        private $page;

        /**
         * @JsonProperty(Integer, "page_size")
         */
        private $pageSize;

        /**
         * @JsonProperty(Integer, "query_order_type")
         */
        private $queryOrderType;

        /**
         * @JsonProperty(Boolean, "return_count")
         */
        private $returnCount;

        /**
         * @JsonProperty(Long, "start_update_time")
         */
        private $startUpdateTime;

        public function setcashGiftOrder($cashGiftOrder)
        {
            $this->cashGiftOrder = $cashGiftOrder;
        }

        public function setEndUpdateTime($endUpdateTime)
        {
            $this->endUpdateTime = $endUpdateTime;
        }

        public function setPage($page)
        {
            $this->page = $page;
        }

        public function setPageSize($pageSize)
        {
            $this->pageSize = $pageSize;
        }

        public function setQueryOrderType($queryOrderType)
        {
            $this->queryOrderType = $queryOrderType;
        }

        public function setReturnCount($returnCount)
        {
            $this->returnCount = $returnCount;
        }

        public function setStartUpdateTime($startUpdateTime)
        {
            $this->startUpdateTime = $startUpdateTime;
        }

        public function getParams()
        {
            $params = [
                'type' => $this->type,
                'cash_gift_order' => $this->cashGiftOrder,
                'start_update_time' => $this->startUpdateTime,
                'end_update_time' => $this->endUpdateTime,
                'page_size' => $this->pageSize,
                'page' => $this->page,
                'query_order_type' => $this->queryOrderType,
                'return_count' => $this->returnCount
            ];
            return array_filter($params, function ($v) {
                if ($v || $v === false) {
                    return true;
                }
            });
        }
    }
