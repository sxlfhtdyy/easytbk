<?php

    namespace Dml\EasyTBK\PinDuoDuo;


    class Application
    {
        /**
         * SDK版本号
         */
        public static $VERSION="0.0.2";

        /**
         * 接口超时时间
         */
        private static $SECONDS = "30";

        /**
         * @var string API协议版本号，默认V1
         */
        private $API_VERSION = "V1";

        public $clientId;

        public $clientSecret;

        public $apiServerUrl = "https://gw-api.pinduoduo.com/api/router";

        public $format = "JSON";

        public function __construct($client_id = "", $client_secret = "")
        {
            $this->clientId = $client_id;
            $this->clientSecret = $client_secret;
        }

        /**
         * @param $request 请求的参数
         * @return 返回md5后的sign值
         */
        private function makeSign($params){

            //签名步骤一：按字典序排序参数
            ksort($params);
            $string = $this->toUrlParams($params);

            //签名步骤二：在string首尾加上client_secret
            $string = $this->clientSecret . $string . $this->clientSecret;

            //签名步骤三：MD5加密
            $string = md5($string);

            //签名步骤四：所有字符转为大写
            $result = strtoupper($string);

            return $result;
        }

        /**
         * 格式化参数格式化成url参数
         */
        private function toUrlParams($params)
        {
            $buff = "";
            foreach ($params as $k => $v)
            {
                if($k != "sign" && $v !== "" && !is_array($v)){
                    $buff .= $k . $v ;
                }
            }
            return $buff;
        }

        /**
         * 执行
         * @Author: Dml
         * @Date: 2018/4/26
         * @param $request
         * @return mixed
         */
        public function execute($request, $access_token = '')
        {
            $params = $this->uniqueParams($request, $access_token);

            $sign = $this->makeSign($params);

            $params['sign'] = $sign;

            $response = $this->postCurl($params);

            $respArr = json_decode($response, true);
            return $respArr;
        }

        /**
         * @return Oauth
         */
        public function oauth()
        {
            return new Oauth();
        }

        /**
         * 单例获取当前对象
         * @Author: Dml
         * @Date: 2018/4/26
         * @return static
         */
        public static function getInstance()
        {
            if (!isset(self::$instance)) {
                self::$instance = new static();
            }
            return self::$instance;
        }

        /**
         * 魔术方法 调用不存在的静态方法时触发
         * @Author: Dml
         * @Date: 2018/4/26
         * @param $name
         * @param $arguments
         * @return mixed
         */
        public static function __callStatic($name, $arguments)
        {
            $obj = self::getInstance();
            return $obj->$name($arguments);
        }

        /**
         * 构造全部参数
         * @param $request请求参数 $access_token 授权参数
         * @return 构造后的所有参数
         */
        private function uniqueParams($request, $access_token){

            $params = $request->getParams();
            $params["version"] = $this->API_VERSION;
            $params["data_type"] = $this->format;
            $params["timestamp"] = time();

            $params['client_id'] = $this->clientId;

            if($access_token){
                $params['access_token'] = $access_token;
            }

            //把boolean转为true 和 false
            foreach ($params as $key=>$val){
                if(is_bool($val)){
                    $params[$key] = $val?"true":"false";
                }
            }

            return $params;
        }


        private function postCurl($params){

            $ch = curl_init();
            $curlVersion = curl_version();
            $ua = "PopSDK/".self::$VERSION." (".PHP_OS.") PHP/".PHP_VERSION." CURL/".$curlVersion['version']." "
                  .$this->clientId;

            //设置超时
            curl_setopt($ch, CURLOPT_TIMEOUT, self::$SECONDS);

            curl_setopt($ch,CURLOPT_URL, $this->apiServerUrl);
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
            curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);//严格校验
            curl_setopt($ch,CURLOPT_USERAGENT, $ua);
            //设置header
            curl_setopt($ch, CURLOPT_HEADER,false);

            //设置header
            $headers = array(
                "Cache-Control: no-cache",
                "Pragma: no-cache",
                "Pdd-Sdk-Version: ".self::$VERSION,
                "Pdd-Sdk-Type: PHP"
            );
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            //要求结果为字符串且输出到屏幕上
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

            //post提交方式
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

            //运行curl
            $raw_response = curl_exec($ch);
            $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            //返回结果
            if($raw_response){
                curl_close($ch);

                return $raw_response;
            } else {
                $error = curl_errno($ch);
                curl_close($ch);
                throw new PopHttpException("curl出错，错误码:$error");
            }
        }

    }