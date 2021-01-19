<?php

    namespace Dml\EasyTBK\PinDuoDuo\Request;

    use Dml\EasyTBK\PinDuoDuo\RequestInterface;


    class DdkGoodsZsUnitUrlGenRequest implements RequestInterface
    {

        /**
         * 生成普通商品推广链接
         * @var string
         */
        private $type = 'pdd.ddk.goods.zs.unit.url.gen';

        /**
         * @JsonProperty(String, "pid")
         */
        private $pid;

        /**
         * @JsonProperty(String, "source_url")
         */
        private $sourceUrl;

        /**
         * @JsonProperty(String, "custom_parameters")
         */
        private $customParameters;


        public function setPid($pid)
        {
            $this->pid = $pid;
        }

        public function setSourceUrl($sourceUrl)
        {
            $this->sourceUrl = $sourceUrl;
        }

        public function setCustomParameters($customParameters)
        {
            $this->customParameters = $customParameters;
        }
        public function getParams()
        {
            $params = [
                'type' => $this->type,
                'pid' => $this->pid,
                'source_url' => $this->sourceUrl,
                'custom_parameters' => $this->customParameters
            ];
            return array_filter($params);
        }
    }
