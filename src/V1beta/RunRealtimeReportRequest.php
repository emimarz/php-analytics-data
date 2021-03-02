<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/analytics_data_api.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to generate a realtime report.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.RunRealtimeReportRequest</code>
 */
class RunRealtimeReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A Google Analytics GA4 property identifier whose events are tracked.
     * Specified in the URL path and not the body. To learn more, see [where to
     * find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1;</code>
     */
    private $property = '';
    /**
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     */
    private $dimensions;
    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     */
    private $metrics;
    /**
     * The filter clause of dimensions. Dimensions must be requested to be used in
     * this filter. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 4;</code>
     */
    private $dimension_filter = null;
    /**
     * The filter clause of metrics. Applied at post aggregation phase, similar to
     * SQL having-clause. Metrics must be requested to be used in this filter.
     * Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 5;</code>
     */
    private $metric_filter = null;
    /**
     * Page size specifies maximum number of rows to return. If unspecified, up to
     * 10,000 rows are returned. The API returns a maximum of 100,000 rows per
     * request, no matter how many you ask for. Page size must be positive.
     * The API can also return fewer rows than the requested `pageSize`, if there
     * aren't as many dimension values as the `pageSize`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if you
     * set `pageSize` to a higher value.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/realtime-basics#pagination).
     *
     * Generated from protobuf field <code>int32 page_size = 6;</code>
     */
    private $page_size = 0;
    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricAggregation metric_aggregations = 7;</code>
     */
    private $metric_aggregations;
    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.OrderBy order_bys = 8;</code>
     */
    private $order_bys;
    /**
     * Toggles whether to return the current state of this Analytics Property's
     * Realtime quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 9;</code>
     */
    private $return_property_quota = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $property
     *           A Google Analytics GA4 property identifier whose events are tracked.
     *           Specified in the URL path and not the body. To learn more, see [where to
     *           find your Property
     *           ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     *           Example: properties/1234
     *     @type \Google\Analytics\Data\V1beta\Dimension[]|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           The dimensions requested and displayed.
     *     @type \Google\Analytics\Data\V1beta\Metric[]|\Google\Protobuf\Internal\RepeatedField $metrics
     *           The metrics requested and displayed.
     *     @type \Google\Analytics\Data\V1beta\FilterExpression $dimension_filter
     *           The filter clause of dimensions. Dimensions must be requested to be used in
     *           this filter. Metrics cannot be used in this filter.
     *     @type \Google\Analytics\Data\V1beta\FilterExpression $metric_filter
     *           The filter clause of metrics. Applied at post aggregation phase, similar to
     *           SQL having-clause. Metrics must be requested to be used in this filter.
     *           Dimensions cannot be used in this filter.
     *     @type int $page_size
     *           Page size specifies maximum number of rows to return. If unspecified, up to
     *           10,000 rows are returned. The API returns a maximum of 100,000 rows per
     *           request, no matter how many you ask for. Page size must be positive.
     *           The API can also return fewer rows than the requested `pageSize`, if there
     *           aren't as many dimension values as the `pageSize`. For instance, there are
     *           fewer than 300 possible values for the dimension `country`, so when
     *           reporting on only `country`, you can't get more than 300 rows, even if you
     *           set `pageSize` to a higher value.
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/realtime-basics#pagination).
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $metric_aggregations
     *           Aggregation of metrics. Aggregated metric values will be shown in rows
     *           where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *     @type \Google\Analytics\Data\V1beta\OrderBy[]|\Google\Protobuf\Internal\RepeatedField $order_bys
     *           Specifies how rows are ordered in the response.
     *     @type bool $return_property_quota
     *           Toggles whether to return the current state of this Analytics Property's
     *           Realtime quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * A Google Analytics GA4 property identifier whose events are tracked.
     * Specified in the URL path and not the body. To learn more, see [where to
     * find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1;</code>
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * A Google Analytics GA4 property identifier whose events are tracked.
     * Specified in the URL path and not the body. To learn more, see [where to
     * find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->property = $var;

        return $this;
    }

    /**
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     * @param \Google\Analytics\Data\V1beta\Dimension[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\Dimension::class);
        $this->dimensions = $arr;

        return $this;
    }

    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     * @param \Google\Analytics\Data\V1beta\Metric[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\Metric::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * The filter clause of dimensions. Dimensions must be requested to be used in
     * this filter. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 4;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpression|null
     */
    public function getDimensionFilter()
    {
        return isset($this->dimension_filter) ? $this->dimension_filter : null;
    }

    public function hasDimensionFilter()
    {
        return isset($this->dimension_filter);
    }

    public function clearDimensionFilter()
    {
        unset($this->dimension_filter);
    }

    /**
     * The filter clause of dimensions. Dimensions must be requested to be used in
     * this filter. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 4;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpression $var
     * @return $this
     */
    public function setDimensionFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\FilterExpression::class);
        $this->dimension_filter = $var;

        return $this;
    }

    /**
     * The filter clause of metrics. Applied at post aggregation phase, similar to
     * SQL having-clause. Metrics must be requested to be used in this filter.
     * Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 5;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpression|null
     */
    public function getMetricFilter()
    {
        return isset($this->metric_filter) ? $this->metric_filter : null;
    }

    public function hasMetricFilter()
    {
        return isset($this->metric_filter);
    }

    public function clearMetricFilter()
    {
        unset($this->metric_filter);
    }

    /**
     * The filter clause of metrics. Applied at post aggregation phase, similar to
     * SQL having-clause. Metrics must be requested to be used in this filter.
     * Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 5;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpression $var
     * @return $this
     */
    public function setMetricFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1beta\FilterExpression::class);
        $this->metric_filter = $var;

        return $this;
    }

    /**
     * Page size specifies maximum number of rows to return. If unspecified, up to
     * 10,000 rows are returned. The API returns a maximum of 100,000 rows per
     * request, no matter how many you ask for. Page size must be positive.
     * The API can also return fewer rows than the requested `pageSize`, if there
     * aren't as many dimension values as the `pageSize`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if you
     * set `pageSize` to a higher value.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/realtime-basics#pagination).
     *
     * Generated from protobuf field <code>int32 page_size = 6;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Page size specifies maximum number of rows to return. If unspecified, up to
     * 10,000 rows are returned. The API returns a maximum of 100,000 rows per
     * request, no matter how many you ask for. Page size must be positive.
     * The API can also return fewer rows than the requested `pageSize`, if there
     * aren't as many dimension values as the `pageSize`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if you
     * set `pageSize` to a higher value.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/realtime-basics#pagination).
     *
     * Generated from protobuf field <code>int32 page_size = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricAggregation metric_aggregations = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricAggregations()
    {
        return $this->metric_aggregations;
    }

    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricAggregation metric_aggregations = 7;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricAggregations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Analytics\Data\V1beta\MetricAggregation::class);
        $this->metric_aggregations = $arr;

        return $this;
    }

    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.OrderBy order_bys = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrderBys()
    {
        return $this->order_bys;
    }

    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.OrderBy order_bys = 8;</code>
     * @param \Google\Analytics\Data\V1beta\OrderBy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrderBys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\OrderBy::class);
        $this->order_bys = $arr;

        return $this;
    }

    /**
     * Toggles whether to return the current state of this Analytics Property's
     * Realtime quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 9;</code>
     * @return bool
     */
    public function getReturnPropertyQuota()
    {
        return $this->return_property_quota;
    }

    /**
     * Toggles whether to return the current state of this Analytics Property's
     * Realtime quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnPropertyQuota($var)
    {
        GPBUtil::checkBool($var);
        $this->return_property_quota = $var;

        return $this;
    }

}
