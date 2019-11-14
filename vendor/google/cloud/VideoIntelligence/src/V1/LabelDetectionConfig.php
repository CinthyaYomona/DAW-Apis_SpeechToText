<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for LABEL_DETECTION.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.LabelDetectionConfig</code>
 */
class LabelDetectionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * What labels should be detected with LABEL_DETECTION, in addition to
     * video-level labels or segment-level labels.
     * If unspecified, defaults to `SHOT_MODE`.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.LabelDetectionMode label_detection_mode = 1;</code>
     */
    private $label_detection_mode = 0;
    /**
     * Whether the video has been shot from a stationary (i.e. non-moving) camera.
     * When set to true, might improve detection accuracy for moving objects.
     * Should be used with `SHOT_AND_FRAME_MODE` enabled.
     *
     * Generated from protobuf field <code>bool stationary_camera = 2;</code>
     */
    private $stationary_camera = false;
    /**
     * Model to use for label detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 3;</code>
     */
    private $model = '';
    /**
     * The confidence threshold we perform filtering on the labels from
     * frame-level detection. If not set, it is set to 0.4 by default. The valid
     * range for this threshold is [0.1, 0.9]. Any value set outside of this
     * range will be clipped.
     * Note: for best results please follow the default threshold. We will update
     * the default threshold everytime when we release a new model.
     *
     * Generated from protobuf field <code>float frame_confidence_threshold = 4;</code>
     */
    private $frame_confidence_threshold = 0.0;
    /**
     * The confidence threshold we perform filtering on the labels from
     * video-level and shot-level detections. If not set, it is set to 0.3 by
     * default. The valid range for this threshold is [0.1, 0.9]. Any value set
     * outside of this range will be clipped.
     * Note: for best results please follow the default threshold. We will update
     * the default threshold everytime when we release a new model.
     *
     * Generated from protobuf field <code>float video_confidence_threshold = 5;</code>
     */
    private $video_confidence_threshold = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $label_detection_mode
     *           What labels should be detected with LABEL_DETECTION, in addition to
     *           video-level labels or segment-level labels.
     *           If unspecified, defaults to `SHOT_MODE`.
     *     @type bool $stationary_camera
     *           Whether the video has been shot from a stationary (i.e. non-moving) camera.
     *           When set to true, might improve detection accuracy for moving objects.
     *           Should be used with `SHOT_AND_FRAME_MODE` enabled.
     *     @type string $model
     *           Model to use for label detection.
     *           Supported values: "builtin/stable" (the default if unset) and
     *           "builtin/latest".
     *     @type float $frame_confidence_threshold
     *           The confidence threshold we perform filtering on the labels from
     *           frame-level detection. If not set, it is set to 0.4 by default. The valid
     *           range for this threshold is [0.1, 0.9]. Any value set outside of this
     *           range will be clipped.
     *           Note: for best results please follow the default threshold. We will update
     *           the default threshold everytime when we release a new model.
     *     @type float $video_confidence_threshold
     *           The confidence threshold we perform filtering on the labels from
     *           video-level and shot-level detections. If not set, it is set to 0.3 by
     *           default. The valid range for this threshold is [0.1, 0.9]. Any value set
     *           outside of this range will be clipped.
     *           Note: for best results please follow the default threshold. We will update
     *           the default threshold everytime when we release a new model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * What labels should be detected with LABEL_DETECTION, in addition to
     * video-level labels or segment-level labels.
     * If unspecified, defaults to `SHOT_MODE`.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.LabelDetectionMode label_detection_mode = 1;</code>
     * @return int
     */
    public function getLabelDetectionMode()
    {
        return $this->label_detection_mode;
    }

    /**
     * What labels should be detected with LABEL_DETECTION, in addition to
     * video-level labels or segment-level labels.
     * If unspecified, defaults to `SHOT_MODE`.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.LabelDetectionMode label_detection_mode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLabelDetectionMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VideoIntelligence\V1\LabelDetectionMode::class);
        $this->label_detection_mode = $var;

        return $this;
    }

    /**
     * Whether the video has been shot from a stationary (i.e. non-moving) camera.
     * When set to true, might improve detection accuracy for moving objects.
     * Should be used with `SHOT_AND_FRAME_MODE` enabled.
     *
     * Generated from protobuf field <code>bool stationary_camera = 2;</code>
     * @return bool
     */
    public function getStationaryCamera()
    {
        return $this->stationary_camera;
    }

    /**
     * Whether the video has been shot from a stationary (i.e. non-moving) camera.
     * When set to true, might improve detection accuracy for moving objects.
     * Should be used with `SHOT_AND_FRAME_MODE` enabled.
     *
     * Generated from protobuf field <code>bool stationary_camera = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setStationaryCamera($var)
    {
        GPBUtil::checkBool($var);
        $this->stationary_camera = $var;

        return $this;
    }

    /**
     * Model to use for label detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 3;</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Model to use for label detection.
     * Supported values: "builtin/stable" (the default if unset) and
     * "builtin/latest".
     *
     * Generated from protobuf field <code>string model = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * The confidence threshold we perform filtering on the labels from
     * frame-level detection. If not set, it is set to 0.4 by default. The valid
     * range for this threshold is [0.1, 0.9]. Any value set outside of this
     * range will be clipped.
     * Note: for best results please follow the default threshold. We will update
     * the default threshold everytime when we release a new model.
     *
     * Generated from protobuf field <code>float frame_confidence_threshold = 4;</code>
     * @return float
     */
    public function getFrameConfidenceThreshold()
    {
        return $this->frame_confidence_threshold;
    }

    /**
     * The confidence threshold we perform filtering on the labels from
     * frame-level detection. If not set, it is set to 0.4 by default. The valid
     * range for this threshold is [0.1, 0.9]. Any value set outside of this
     * range will be clipped.
     * Note: for best results please follow the default threshold. We will update
     * the default threshold everytime when we release a new model.
     *
     * Generated from protobuf field <code>float frame_confidence_threshold = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setFrameConfidenceThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->frame_confidence_threshold = $var;

        return $this;
    }

    /**
     * The confidence threshold we perform filtering on the labels from
     * video-level and shot-level detections. If not set, it is set to 0.3 by
     * default. The valid range for this threshold is [0.1, 0.9]. Any value set
     * outside of this range will be clipped.
     * Note: for best results please follow the default threshold. We will update
     * the default threshold everytime when we release a new model.
     *
     * Generated from protobuf field <code>float video_confidence_threshold = 5;</code>
     * @return float
     */
    public function getVideoConfidenceThreshold()
    {
        return $this->video_confidence_threshold;
    }

    /**
     * The confidence threshold we perform filtering on the labels from
     * video-level and shot-level detections. If not set, it is set to 0.3 by
     * default. The valid range for this threshold is [0.1, 0.9]. Any value set
     * outside of this range will be clipped.
     * Note: for best results please follow the default threshold. We will update
     * the default threshold everytime when we release a new model.
     *
     * Generated from protobuf field <code>float video_confidence_threshold = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setVideoConfidenceThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->video_confidence_threshold = $var;

        return $this;
    }

}

