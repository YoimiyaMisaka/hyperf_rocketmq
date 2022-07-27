<?php

namespace Timebug\Rocketmq\Config;

class Pool
{
    private int $minConnections = 10;

    private int $maxConnections = 50;

    private int $connectTimeout = 3;

    private int $waitTimeout = 20;

    private int $heartbeat = -1;

    private int $maxIdleTime = 60;

    public function __construct(array $data = [])
    {
        isset($data['min_connections']) && $this->minConnections = $data['min_connections'];
        isset($data['max_connections']) && $this->maxConnections = $data['max_connections'];
        isset($data['connect_timeout']) && $this->connectTimeout = $data['connect_timeout'];
        isset($data['wait_timeout']) && $this->waitTimeout = $data['wait_timeout'];
        isset($data['heartbeat']) && $this->heartbeat = $data['heartbeat'];
        isset($data['max_idle_time']) && $this->maxIdleTime = $data['max_idle_time'];
    }

    /**
     * @return int|mixed
     */
    public function getMinConnections(): mixed
    {
        return $this->minConnections;
    }

    /**
     * @return int|mixed
     */
    public function getMaxConnections(): mixed
    {
        return $this->maxConnections;
    }

    /**
     * @return int|mixed
     */
    public function getConnectTimeout(): mixed
    {
        return $this->connectTimeout;
    }

    /**
     * @return int|mixed
     */
    public function getWaitTimeout(): mixed
    {
        return $this->waitTimeout;
    }

    /**
     * @return int|mixed
     */
    public function getHeartbeat(): mixed
    {
        return $this->heartbeat;
    }

    /**
     * @return int|mixed
     */
    public function getMaxIdleTime(): mixed
    {
        return $this->maxIdleTime;
    }

    public function toArray(): array
    {
        return [
            'min_connections' => $this->minConnections,
            'max_connections' => $this->maxConnections,
            'connect_timeout' => $this->connectTimeout,
            'wait_timeout' => $this->waitTimeout,
            'heartbeat' => $this->heartbeat,
            'max_idle_time' => $this->maxIdleTime,
        ];
    }
}