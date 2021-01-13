<?php

    namespace Dml\EasyTBK\PinDuoDuo\Request;

    use Dml\EasyTBK\PinDuoDuo\RequestInterface;


    class DdkGoodsPromotionUrlGenerateRequest implements RequestInterface
    {

        /**
         * 生成普通商品推广链接
         * @var string
         */
        private $type = 'pdd.ddk.goods.promotion.url.generate';


        /*
         * @JsonProperty(String, "crash_gift_id")
         */
        private $crashGiftId;

        /**
         * @JsonProperty(String, "custom_parameters")
         */
        private $customParameters;

        /**
         * @JsonProperty(Boolean, "generate_authority_url")
         */
        private $generateAuthorityUrl;

        /**
         * @JsonProperty(Boolean, "generate_mall_collect_coupon")
         */
        private $generateMallCollectCoupon;

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
         * @JsonProperty(Boolean, "generate_weapp_webview")
         */
        private $generateWeappWebview;

        /**
         * @JsonProperty(Boolean, "generate_weiboapp_webview")
         */
        private $generateWeiboappWebview;

        /**
         * @JsonProperty(Boolean, "generate_we_app")
         */
        private $generateWeApp;

        /**
         * @JsonProperty(List<Long>, "goods_id_list")
         */
        private $goodsIdList;

        /**
         * @JsonProperty(String, "goods_sign")
         */
        private $goodsSign;

        /**
         * @JsonProperty(String, "goods_sign_list")
         */
        private $goodsSignList;

        /**
         * @JsonProperty(Boolean, "multi_group")
         */
        private $multiGroup;

        /**
         * @JsonProperty(String, "p_id")
         */
        private $pId;

        /**
         * @JsonProperty(List<String>, "room_id_list")
         */
        private $roomIdList;

        /**
         * @JsonProperty(String, "search_id")
         */
        private $searchId;

        /**
         * @JsonProperty(List<String>, "target_id_list")
         */
        private $targetIdList;

        /**
         * @JsonProperty(Long, "zs_duo_id")
         */
        private $zsDuoId;


        public function setCrashGiftId($crashGiftId) {
            $this->crashGiftId = $crashGiftId;
        }

        public function setCustomParameters($customParameters)
        {
            $this->customParameters = $customParameters;
        }

        public function setGenerateAuthorityUrl($generateAuthorityUrl)
        {
            $this->generateAuthorityUrl = $generateAuthorityUrl;
        }

        public function setGenerateMallCollectCoupon($generateMallCollectCoupon)
        {
            $this->generateMallCollectCoupon = $generateMallCollectCoupon;
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

        public function setGenerateWeappWebview($generateWeappWebview)
        {
            $this->generateWeappWebview = $generateWeappWebview;
        }

        public function setGenerateWeiboappWebview($generateWeiboappWebview)
        {
            $this->generateWeiboappWebview = $generateWeiboappWebview;
        }

        public function setGenerateWeApp($generateWeApp)
        {
            $this->generateWeApp = $generateWeApp;
        }

        public function setGoodsIdList($goodsIdList)
        {
            $this->goodsIdList = $goodsIdList;
        }

        public function setGoodsSign($goodsSign)
        {
            $this->goodsSign = $goodsSign;
        }

        public function setGoodsSignList($goodsSignList)
        {
            $this->goodsSignList = $goodsSignList;
        }

        public function setMultiGroup($multiGroup)
        {
            $this->multiGroup = $multiGroup;
        }

        public function setPId($pId)
        {
            $this->pId = $pId;
        }

        public function setRoomIdList($roomIdList)
        {
            $this->roomIdList = $roomIdList;
        }

        public function setSearchId($searchId)
        {
            $this->searchId = $searchId;
        }

        public function setTargetIdList($targetIdList)
        {
            $this->targetIdList = $targetIdList;
        }

        public function setZsDuoId($zsDuoId)
        {
            $this->zsDuoId = $zsDuoId;
        }

        public function getParams()
        {
            $params = [
                'type' => $this->type,
                'crash_gift_id' => $this->crashGiftId,
                'custom_parameters' => $this->customParameters,
                'generate_authority_url' => $this->generateAuthorityUrl,
                'generate_mall_collect_coupon' => $this->generateMallCollectCoupon,
                'generate_qq_app' => $this->generateQqApp,
                'generate_schema_url' => $this->generateSchemaUrl,
                'generate_short_url' => $this->generateShortUrl,
                'generate_we_app' => $this->generateWeApp,
                'goods_id_list' => $this->goodsIdList,
                'goods_sign' => $this->goodsSign,
                'goods_sign_list' => $this->goodsSignList,
                'multi_group' => $this->multiGroup,
                'multi_group' => $this->multiGroup,
                'p_id' => $this->pId,
                'room_id_list' => $this->roomIdList,
                'search_id' => $this->searchId,
                'target_id_list' => $this->targetIdList,
                'zs_duo_id' => $this->zsDuoId,
            ];
            return array_filter($params, function ($v) {
                if ($v || $v === false) {
                    return true;
                }
            });
        }
    }
