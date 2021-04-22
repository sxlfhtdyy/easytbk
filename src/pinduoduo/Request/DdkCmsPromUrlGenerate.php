<?php

    namespace Dml\EasyTBK\PinDuoDuo\Request;

    use Dml\EasyTBK\PinDuoDuo\RequestInterface;


    /**
     * 生成商城-频道推广链接
     *
     * Class DdkCmsPromUrlGenerate
     * @package Dml\EasyTBK\PinDuoDuo\Request
     */
    class DdkCmsPromUrlGenerate implements RequestInterface
    {

        private $type = 'pdd.ddk.cms.prom.url.generate';


        /**
         * @JsonProperty(Integer, "channel_type")
         */
        private $channelType;

        /**
         * @JsonProperty(String, "custom_parameters")
         */
        private $customParameters;

        /**
         * @JsonProperty(bool, "generate_mobile", default: false)
         */
        private $generateMobile;

        /**
         * @JsonProperty(<bool>, "generate_schema_url", default: false)
         */
        private $generateSchemaUrl;

        /**
         * @JsonProperty(bool, "generate_short_url", default: false)
         */
        private $generateShortUrl;

        /**
         * @JsonProperty(bool, "generate_we_app", default: false)
         */
        private $generateWeApp;

        /**
         * @JsonProperty(String, "keyword")
         */
        private $keyword;

        /**
         * @JsonProperty(Bool, "multi_group", detault:false)
         */
        private $multiGroup;

        /**
         * @JsonProperty(array, "p_id_list")
         */
        private $pidList;

        public function setChannelType($channelType)
        {
            $this->channelType = $channelType;
        }

        public function setCustomParameters($customParameters)
        {
            $this->customParameters = $customParameters;
        }

        public function setGenerateMobile($generateMobile)
        {
            $this->generateMobile = $generateMobile;
        }

        public function setGenerateSchemaUrl($generateSchemaUrl)
        {
            $this->generateSchemaUrl = $generateSchemaUrl;
        }

        public function seGenerateShortUrl($generateShortUrl)
        {
            $this->generateShortUrl = $generateShortUrl;
        }

        public function setGenerateWeApp($generateWeApp)
        {
            $this->generateWeApp = $generateWeApp;
        }

        public function setKeyword($keyword)
        {
            $this->keyword = $keyword;
        }

        public function setMultiGroup($multiGroup)
        {
            $this->multiGroup = $multiGroup;
        }

        public function setPidList($pidList)
        {
            $this->pidList = $pidList;
        }

        public function getParams()
        {
            $params = [
                'type' => $this->type,
                'channel_type' => $this->channelType,
                'custom_parameters' => $this->customParameters,
                'generate_mobile' => $this->generateMobile,
                'generate_schema_url' => $this->generateSchemaUrl,
                'generate_short_url' => $this->generateShortUrl,
                'generate_we_app' => $this->generateWeApp,
                'keyword' => $this->keyword,
                'multi_group' => $this->multiGroup,
                'p_id_list' => $this->pidList,
            ];
            return $params;
        }
    }
