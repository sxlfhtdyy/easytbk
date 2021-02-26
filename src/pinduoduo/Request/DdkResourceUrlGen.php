<?php
    /**
     * 生成多多进宝频道推广：pdd.ddk.resource.url.gen
     *
     * Created by PhpStorm.
     * User: lishun
     * Date: 2021/2/26
     * Time: 16:11
     */

    namespace Dml\EasyTBK\PinDuoDuo\Request;

    use Dml\EasyTBK\PinDuoDuo\RequestInterface;

    class DdkResourceUrlGen implements RequestInterface {
        /**
         * 生成普通商品推广链接
         * @var string
         */
        private $type = 'pdd.ddk.resource.url.gen';

        /**
         * @JsonProperty(String, "custom_parameters")
         */
        private $customParameters;

        /**
         * @JsonProperty(String, "url")
         */
        private $url;

        /**
         * @JsonProperty(int, "resource_type")
         */
        private $resourceType;

        /**
         * @JsonProperty(Boolean, "generate_we_app")
         */
        private $generateWeApp;

        /**
         * @JsonProperty(String, "p_id")
         */
        private $pId;

        /**
         * @JsonProperty(List<String>, "room_id_list")
         */


        public function setCustomParameters($customParameters) {
            $this->customParameters = $customParameters;
        }

        public function setGenerateWeApp($generateWeApp) {
            $this->generateWeApp = $generateWeApp;
        }

        public function setPId($pId) {
            $this->pId = $pId;
        }

        public function setUrl($url) {
            $this->url = $url;
        }

        public function setResourceType($resourceType) {
            $this->resourceType = $resourceType;
        }

        public function getParams() {
            $params                      = array();
            $params['type']              = $this->type;
            $params['custom_parameters'] = $this->customParameters;
            $params['generate_we_app']   = $this->generateWeApp;
            $params['pid']               = $this->pId;
            $params['resource_type']     = $this->resourceType;
            $params['url']               = $this->url;

            return array_filter($params, function ($v) {
                if ($v || $v === false) {
                    return true;
                }
            });
        }
    }