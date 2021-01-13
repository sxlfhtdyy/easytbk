<?php
    /**
     * Created by PhpStorm.
     * User: manbinzheng
     * Date: 2020-03-17
     * Time: 12:12
     */

    namespace Dml\EasyTBK\PinDuoDuo\Request;

    use Dml\EasyTBK\PinDuoDuo\RequestInterface;


    class DdkOrderListRangeGetRequest implements RequestInterface
    {
        /**
         * 根据支付时间段查询推广订单接口
         * @var string
         */
        private $type = 'pdd.ddk.order.list.range.get';

        /**
         * @JsonProperty(String, "end_time")
         */
        private $endTime;

        /**
         * @JsonProperty(String, "last_order_id")
         */
        private $lastOrderId;

        /**
         * @JsonProperty(Integer, "page_size")
         */
        private $pageSize;

        /**
         * @JsonProperty(Integer, "query_order_type")
         */
        private $queryOrderType;

        /**
         * @JsonProperty(String, "start_time")
         */
        private $startTime;

        /**
         * @JsonProperty(BOOLEAN, "cash_gift_order")
         */
        private $cashGiftOrder;

        public function setEndTime($endTime)
        {
            $this->endTime = $endTime;
        }

        public function setLastOrderId($lastOrderId)
        {
            $this->lastOrderId = $lastOrderId;
        }

        public function setPageSize($pageSize)
        {
            $this->pageSize = $pageSize;
        }

        public function setQueryOrderType($queryOrderType)
        {
            $this->queryOrderType = $queryOrderType;
        }

        public function setStartTime($startTime)
        {
            $this->startTime = $startTime;
        }

        public function setCashGiftOrder($cashGiftOrder)
        {
            $this->cashGiftOrder = $cashGiftOrder;
        }
        public function getParams()
        {
            $params = [
                'type' => $this->type,
                'end_time' => $this->endTime,
                'last_order_id' => $this->lastOrderId,
                'page_size' => $this->pageSize,
                'query_order_type' => $this->queryOrderType,
                'start_time' => $this->startTime,
                'cash_gift_order' => $this->cashGiftOrder,
            ];
            return array_filter($params, function ($v) {
                if ($v || $v === false) {
                    return true;
                }
            });
        }
    }
