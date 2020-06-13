<?php

namespace App\Library\Realtime\Subscription;

use App\Library\Realtime\Mqtt;
use App\Library\Realtime\SubscriptionInterface;

abstract class GraphQlSubscription implements SubscriptionInterface
{
    const TEMPLATE = '1/graphqlsubscriptions/%s/%s';

    /** @var string */
    protected $_queryId;

    /** @var mixed */
    protected $_inputData;

    /**
     * Constructor.
     *
     * @param string $queryId
     * @param mixed  $inputData
     */
    public function __construct(
        $queryId,
        $inputData)
    {
        $this->_queryId = $queryId;
        $this->_inputData = $inputData;
    }

    /** {@inheritdoc} */
    public function getTopic()
    {
        return Mqtt\Topics::REALTIME_SUB;
    }

    /** {@inheritdoc} */
    abstract public function getId();

    /** {@inheritdoc} */
    public function __toString()
    {
        return sprintf(self::TEMPLATE, $this->_queryId, json_encode(['input_data' => $this->_inputData]));
    }
}
