<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace GPBMetadata\Google\Spanner\Admin\Instance\V1;

class SpannerInstanceAdmin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac5280a3d676f6f676c652f7370616e6e65722f61646d696e2f696e7374" .
            "616e63652f76312f7370616e6e65725f696e7374616e63655f61646d696e" .
            "2e70726f746f1220676f6f676c652e7370616e6e65722e61646d696e2e69" .
            "6e7374616e63652e76311a17676f6f676c652f6170692f636c69656e742e" .
            "70726f746f1a1f676f6f676c652f6170692f6669656c645f626568617669" .
            "6f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e" .
            "70726f746f1a1e676f6f676c652f69616d2f76312f69616d5f706f6c6963" .
            "792e70726f746f1a1a676f6f676c652f69616d2f76312f706f6c6963792e" .
            "70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f706572" .
            "6174696f6e732e70726f746f1a1b676f6f676c652f70726f746f6275662f" .
            "656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f66" .
            "69656c645f6d61736b2e70726f746f1a1f676f6f676c652f70726f746f62" .
            "75662f74696d657374616d702e70726f746f22da010a0b5265706c696361" .
            "496e666f12100a086c6f636174696f6e18012001280912470a0474797065" .
            "18022001280e32392e676f6f676c652e7370616e6e65722e61646d696e2e" .
            "696e7374616e63652e76312e5265706c696361496e666f2e5265706c6963" .
            "6154797065121f0a1764656661756c745f6c65616465725f6c6f63617469" .
            "6f6e180320012808224f0a0b5265706c6963615479706512140a10545950" .
            "455f554e5350454349464945441000120e0a0a524541445f575249544510" .
            "01120d0a09524541445f4f4e4c591002120b0a075749544e455353100322" .
            "d7010a0e496e7374616e6365436f6e666967120c0a046e616d6518012001" .
            "280912140a0c646973706c61795f6e616d65180220012809123f0a087265" .
            "706c6963617318032003280b322d2e676f6f676c652e7370616e6e65722e" .
            "61646d696e2e696e7374616e63652e76312e5265706c696361496e666f3a" .
            "60ea415d0a257370616e6e65722e676f6f676c65617069732e636f6d2f49" .
            "6e7374616e6365436f6e666967123470726f6a656374732f7b70726f6a65" .
            "63747d2f696e7374616e6365436f6e666967732f7b696e7374616e63655f" .
            "636f6e6669677d22be030a08496e7374616e6365120c0a046e616d651801" .
            "20012809123a0a06636f6e666967180220012809422afa41270a25737061" .
            "6e6e65722e676f6f676c65617069732e636f6d2f496e7374616e6365436f" .
            "6e66696712140a0c646973706c61795f6e616d6518032001280912120a0a" .
            "6e6f64655f636f756e74180520012805123f0a0573746174651806200128" .
            "0e32302e676f6f676c652e7370616e6e65722e61646d696e2e696e737461" .
            "6e63652e76312e496e7374616e63652e537461746512460a066c6162656c" .
            "7318072003280b32362e676f6f676c652e7370616e6e65722e61646d696e" .
            "2e696e7374616e63652e76312e496e7374616e63652e4c6162656c73456e" .
            "7472791a2d0a0b4c6162656c73456e747279120b0a036b65791801200128" .
            "09120d0a0576616c75651802200128093a02380122370a05537461746512" .
            "150a1153544154455f554e5350454349464945441000120c0a0843524541" .
            "54494e47100112090a05524541445910023a4dea414a0a1f7370616e6e65" .
            "722e676f6f676c65617069732e636f6d2f496e7374616e6365122770726f" .
            "6a656374732f7b70726f6a6563747d2f696e7374616e6365732f7b696e73" .
            "74616e63657d2288010a1a4c697374496e7374616e6365436f6e66696773" .
            "5265717565737412430a06706172656e741801200128094233e04102fa41" .
            "2d0a2b636c6f75647265736f757263656d616e616765722e676f6f676c65" .
            "617069732e636f6d2f50726f6a65637412110a09706167655f73697a6518" .
            "022001280512120a0a706167655f746f6b656e1803200128092282010a1b" .
            "4c697374496e7374616e6365436f6e66696773526573706f6e7365124a0a" .
            "10696e7374616e63655f636f6e6669677318012003280b32302e676f6f67" .
            "6c652e7370616e6e65722e61646d696e2e696e7374616e63652e76312e49" .
            "6e7374616e6365436f6e66696712170a0f6e6578745f706167655f746f6b" .
            "656e18022001280922570a18476574496e7374616e6365436f6e66696752" .
            "657175657374123b0a046e616d65180120012809422de04102fa41270a25" .
            "7370616e6e65722e676f6f676c65617069732e636f6d2f496e7374616e63" .
            "65436f6e666967224b0a12476574496e7374616e63655265717565737412" .
            "350a046e616d651801200128094227e04102fa41210a1f7370616e6e6572" .
            "2e676f6f676c65617069732e636f6d2f496e7374616e636522b9010a1543" .
            "7265617465496e7374616e63655265717565737412430a06706172656e74" .
            "1801200128094233e04102fa412d0a2b636c6f75647265736f757263656d" .
            "616e616765722e676f6f676c65617069732e636f6d2f50726f6a65637412" .
            "180a0b696e7374616e63655f69641802200128094203e0410212410a0869" .
            "6e7374616e636518032001280b322a2e676f6f676c652e7370616e6e6572" .
            "2e61646d696e2e696e7374616e63652e76312e496e7374616e63654203e0" .
            "41022292010a144c697374496e7374616e6365735265717565737412430a" .
            "06706172656e741801200128094233e04102fa412d0a2b636c6f75647265" .
            "736f757263656d616e616765722e676f6f676c65617069732e636f6d2f50" .
            "726f6a65637412110a09706167655f73697a6518022001280512120a0a70" .
            "6167655f746f6b656e180320012809120e0a0666696c7465721804200128" .
            "09226f0a154c697374496e7374616e636573526573706f6e7365123d0a09" .
            "696e7374616e63657318012003280b322a2e676f6f676c652e7370616e6e" .
            "65722e61646d696e2e696e7374616e63652e76312e496e7374616e636512" .
            "170a0f6e6578745f706167655f746f6b656e180220012809228f010a1555" .
            "7064617465496e7374616e63655265717565737412410a08696e7374616e" .
            "636518012001280b322a2e676f6f676c652e7370616e6e65722e61646d69" .
            "6e2e696e7374616e63652e76312e496e7374616e63654203e0410212330a" .
            "0a6669656c645f6d61736b18022001280b321a2e676f6f676c652e70726f" .
            "746f6275662e4669656c644d61736b4203e04102224e0a1544656c657465" .
            "496e7374616e63655265717565737412350a046e616d6518012001280942" .
            "27e04102fa41210a1f7370616e6e65722e676f6f676c65617069732e636f" .
            "6d2f496e7374616e636522e5010a16437265617465496e7374616e63654d" .
            "65746164617461123c0a08696e7374616e636518012001280b322a2e676f" .
            "6f676c652e7370616e6e65722e61646d696e2e696e7374616e63652e7631" .
            "2e496e7374616e6365122e0a0a73746172745f74696d6518022001280b32" .
            "1a2e676f6f676c652e70726f746f6275662e54696d657374616d70122f0a" .
            "0b63616e63656c5f74696d6518032001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e54696d657374616d70122c0a08656e645f74696d651804" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e54696d65737461" .
            "6d7022e5010a16557064617465496e7374616e63654d6574616461746112" .
            "3c0a08696e7374616e636518012001280b322a2e676f6f676c652e737061" .
            "6e6e65722e61646d696e2e696e7374616e63652e76312e496e7374616e63" .
            "65122e0a0a73746172745f74696d6518022001280b321a2e676f6f676c65" .
            "2e70726f746f6275662e54696d657374616d70122f0a0b63616e63656c5f" .
            "74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54" .
            "696d657374616d70122c0a08656e645f74696d6518042001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e54696d657374616d7032bf100a0d49" .
            "6e7374616e636541646d696e12cc010a134c697374496e7374616e636543" .
            "6f6e66696773123c2e676f6f676c652e7370616e6e65722e61646d696e2e" .
            "696e7374616e63652e76312e4c697374496e7374616e6365436f6e666967" .
            "73526571756573741a3d2e676f6f676c652e7370616e6e65722e61646d69" .
            "6e2e696e7374616e63652e76312e4c697374496e7374616e6365436f6e66" .
            "696773526573706f6e7365223882d3e493022912272f76312f7b70617265" .
            "6e743d70726f6a656374732f2a7d2f696e7374616e6365436f6e66696773" .
            "da4106706172656e7412b9010a11476574496e7374616e6365436f6e6669" .
            "67123a2e676f6f676c652e7370616e6e65722e61646d696e2e696e737461" .
            "6e63652e76312e476574496e7374616e6365436f6e666967526571756573" .
            "741a302e676f6f676c652e7370616e6e65722e61646d696e2e696e737461" .
            "6e63652e76312e496e7374616e6365436f6e666967223682d3e493022912" .
            "272f76312f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365" .
            "436f6e666967732f2a7dda41046e616d6512b4010a0d4c697374496e7374" .
            "616e63657312362e676f6f676c652e7370616e6e65722e61646d696e2e69" .
            "6e7374616e63652e76312e4c697374496e7374616e636573526571756573" .
            "741a372e676f6f676c652e7370616e6e65722e61646d696e2e696e737461" .
            "6e63652e76312e4c697374496e7374616e636573526573706f6e73652232" .
            "82d3e493022312212f76312f7b706172656e743d70726f6a656374732f2a" .
            "7d2f696e7374616e636573da4106706172656e7412a1010a0b476574496e" .
            "7374616e636512342e676f6f676c652e7370616e6e65722e61646d696e2e" .
            "696e7374616e63652e76312e476574496e7374616e636552657175657374" .
            "1a2a2e676f6f676c652e7370616e6e65722e61646d696e2e696e7374616e" .
            "63652e76312e496e7374616e6365223082d3e493022312212f76312f7b6e" .
            "616d653d70726f6a656374732f2a2f696e7374616e6365732f2a7dda4104" .
            "6e616d65129c020a0e437265617465496e7374616e636512372e676f6f67" .
            "6c652e7370616e6e65722e61646d696e2e696e7374616e63652e76312e43" .
            "7265617465496e7374616e6365526571756573741a1d2e676f6f676c652e" .
            "6c6f6e6772756e6e696e672e4f7065726174696f6e22b10182d3e4930226" .
            "22212f76312f7b706172656e743d70726f6a656374732f2a7d2f696e7374" .
            "616e6365733a012ada411b706172656e742c696e7374616e63655f69642c" .
            "696e7374616e6365ca41640a29676f6f676c652e7370616e6e65722e6164" .
            "6d696e2e696e7374616e63652e76312e496e7374616e63651237676f6f67" .
            "6c652e7370616e6e65722e61646d696e2e696e7374616e63652e76312e43" .
            "7265617465496e7374616e63654d65746164617461129d020a0e55706461" .
            "7465496e7374616e636512372e676f6f676c652e7370616e6e65722e6164" .
            "6d696e2e696e7374616e63652e76312e557064617465496e7374616e6365" .
            "526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f" .
            "7065726174696f6e22b20182d3e493022f322a2f76312f7b696e7374616e" .
            "63652e6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a" .
            "7d3a012ada4113696e7374616e63652c6669656c645f6d61736bca41640a" .
            "29676f6f676c652e7370616e6e65722e61646d696e2e696e7374616e6365" .
            "2e76312e496e7374616e63651237676f6f676c652e7370616e6e65722e61" .
            "646d696e2e696e7374616e63652e76312e557064617465496e7374616e63" .
            "654d657461646174611293010a0e44656c657465496e7374616e63651237" .
            "2e676f6f676c652e7370616e6e65722e61646d696e2e696e7374616e6365" .
            "2e76312e44656c657465496e7374616e6365526571756573741a162e676f" .
            "6f676c652e70726f746f6275662e456d707479223082d3e49302232a212f" .
            "76312f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f" .
            "2a7dda41046e616d65129a010a0c53657449616d506f6c69637912222e67" .
            "6f6f676c652e69616d2e76312e53657449616d506f6c6963795265717565" .
            "73741a152e676f6f676c652e69616d2e76312e506f6c696379224f82d3e4" .
            "93023722322f76312f7b7265736f757263653d70726f6a656374732f2a2f" .
            "696e7374616e6365732f2a7d3a73657449616d506f6c6963793a012ada41" .
            "0f7265736f757263652c706f6c6963791293010a0c47657449616d506f6c" .
            "69637912222e676f6f676c652e69616d2e76312e47657449616d506f6c69" .
            "6379526571756573741a152e676f6f676c652e69616d2e76312e506f6c69" .
            "6379224882d3e493023722322f76312f7b7265736f757263653d70726f6a" .
            "656374732f2a2f696e7374616e6365732f2a7d3a67657449616d506f6c69" .
            "63793a012ada41087265736f7572636512c5010a125465737449616d5065" .
            "726d697373696f6e7312282e676f6f676c652e69616d2e76312e54657374" .
            "49616d5065726d697373696f6e73526571756573741a292e676f6f676c65" .
            "2e69616d2e76312e5465737449616d5065726d697373696f6e7352657370" .
            "6f6e7365225a82d3e493023d22382f76312f7b7265736f757263653d7072" .
            "6f6a656374732f2a2f696e7374616e6365732f2a7d3a7465737449616d50" .
            "65726d697373696f6e733a012ada41147265736f757263652c7065726d69" .
            "7373696f6e731a78ca41167370616e6e65722e676f6f676c65617069732e" .
            "636f6dd2415c68747470733a2f2f7777772e676f6f676c65617069732e63" .
            "6f6d2f617574682f636c6f75642d706c6174666f726d2c68747470733a2f" .
            "2f7777772e676f6f676c65617069732e636f6d2f617574682f7370616e6e" .
            "65722e61646d696e42df010a24636f6d2e676f6f676c652e7370616e6e65" .
            "722e61646d696e2e696e7374616e63652e763142195370616e6e6572496e" .
            "7374616e636541646d696e50726f746f50015a48676f6f676c652e676f6c" .
            "616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f7370" .
            "616e6e65722f61646d696e2f696e7374616e63652f76313b696e7374616e" .
            "6365aa0226476f6f676c652e436c6f75642e5370616e6e65722e41646d69" .
            "6e2e496e7374616e63652e5631ca0226476f6f676c655c436c6f75645c53" .
            "70616e6e65725c41646d696e5c496e7374616e63655c5631620670726f74" .
            "6f33"
        ), true);

        static::$is_initialized = true;
    }
}

