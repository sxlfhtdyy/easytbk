<?php
    /**
     * Created by PhpStorm.
     * User: Dml
     * Date: 2018/11/20
     * Time: 下午6:45
     */

    namespace Dml\EasyTBK\PinDuoDuo\Request;

    use Dml\EasyTBK\PinDuoDuo\RequestInterface;


    class DdkRpPromUrlGenerateRequest implements RequestInterface
    {
        /**
         * 生成红包推广链接接口
         * @var string
         */
        private $type = 'pdd.ddk.rp.prom.url.generate';

        /**
         * @JsonProperty(Integer, "channel_type")
         */
        private $channelType;

        /**
         * @JsonProperty(String, "custom_parameters")
         */
        private $customParameters;

        /**
         * @JsonProperty(\Com\Pdd\Pop\Sdk\Api\Request\PddDdkRpPromUrlGenerateRequest_DiyLotteryParam, "diy_lottery_param")
         */
        private $diyLotteryParam;

        /**
         * @JsonProperty(\Com\Pdd\Pop\Sdk\Api\Request\PddDdkRpPromUrlGenerateRequest_DiyRedPacketParam, "diy_red_packet_param")
         */
        private $diyRedPacketParam;

        /**
         * @JsonProperty(Boolean, "generate_qq_app")
         */
        private $generateQqApp;

        /**
         * @JsonProperty(Boolean, "generate_schema_url")
         */
        private $generateSchemaUrl;

        /**
         * @JsonProperty(Boolean, "generate_short_url")
         */
        private $generateShortUrl;

        /**
         * @JsonProperty(Boolean, "generate_we_app")
         */
        private $generateWeApp;

        /**
         * @JsonProperty(List<String>, "p_id_list")
         */
        private $pIdList;

        /**
         * @JsonProperty(Long, "amount")
         */
        private $amount;

        /**
         * @JsonProperty(Long, "scratch_card_amount")
         */
        private $scratchCardAmount;

        public function setChannelType($channelType)
        {
            $this->channelType = $channelType;
        }

        public function setCustomParameters($customParameters)
        {
            $this->customParameters = $customParameters;
        }

        public function setDiyLotteryParam($diyLotteryParam)
        {
            $this->diyLotteryParam = $diyLotteryParam;
        }

        public function setDiyRedPacketParam($diyRedPacketParam)
        {
            $this->diyRedPacketParam = $diyRedPacketParam;
        }

        public function setGenerateQqApp($generateQqApp)
        {
            $this->generateQqApp = $generateQqApp;
        }

        public function setGenerateSchemaUrl($generateSchemaUrl)
        {
            $this->generateSchemaUrl = $generateSchemaUrl;
        }

        public function setGenerateShortUrl($generateShortUrl)
        {
            $this->generateShortUrl = $generateShortUrl;
        }

        public function setGenerateWeApp($generateWeApp)
        {
            $this->generateWeApp = $generateWeApp;
        }

        public function setPIdList($pIdList)
        {
            $this->pIdList = $pIdList;
        }

        public function setAmount($amount)
        {
            $this->amount = $amount;
        }

        public function setScratchCardAmount($scratchCardAmount)
        {
            $this->scratchCardAmount = $scratchCardAmount;
        }

        public function getParams()
        {
            $params = [
                'type' => $this->type,
                'channel_type' => $this->channelType,
                'custom_parameters' => $this->customParameters,
                'diy_red_packet_param' => $this->diyRedPacketParam,
                'generate_qq_app' => $this->generateQqApp,
                'generate_schema_url' => $this->generateSchemaUrl,
                'generate_short_url' => $this->generateShortUrl,
                'generate_we_app' => $this->generateWeApp,
                'p_id_list' => $this->pIdList,
                'amount' => $this->amount,
                'scratch_card_amount' => $this->scratchCardAmount,
            ];
            return array_filter($params, function ($v) {
                if ($v || $v === false) {
                    return true;
                }
            });
        }
    }
