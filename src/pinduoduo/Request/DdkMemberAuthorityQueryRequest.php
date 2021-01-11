<?php
    /**
     * Created by PhpStorm.
     * User: Dml
     * Date: 2018/11/20
     * Time: 下午6:45
     */

    namespace Dml\EasyTBK\PinDuoDuo\Request;

    use Dml\EasyTBK\PinDuoDuo\RequestInterface;


    class DdkMemberAuthorityQueryRequest implements RequestInterface {

        private $type = "pdd.ddk.member.authority.query";

        /**
         * @JsonProperty(String, "pid")
         */
        private $pid;

        /**
         * @JsonProperty(String, "custom_parameters")
         */
        private $customParameters;


        public function setPid($pid) {
            $this->pid = $pid;
        }

        public function setCustomParameters($customParameters) {
            $this->customParameters = $customParameters;
        }

        public function getParams()
        {
            $params = [
                'type' => $this->type,
                'pid' => $this->pid,
                'custom_parameters' => $this->customParameters
            ];
            return array_filter($params);
        }
    }
