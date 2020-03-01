<?php

interface Filter
{
    public function doFilter();
}

class AuthEnCationException extends Exception
{

}

class RateLimitException extends Exception
{

}


class AuthEnCationFilter implements Filter
{
    public function doFilter()
    {
        throw new AuthEncationException('用户尚未登录');
    }
}

class RateLimitFilter implements Filter
{
    public function doFilter()
    {
        throw new RateLimitException('流量超了,请稍后再试');
    }
}


class Application
{

    protected $filters = [];

    public function allFilters(Filter $filter)
    {
        $this->filters[] = $filter;
    }

    public function handleRequest()
    {
        foreach ($this->filters as $filter) {
            try {
                $filter->doFilter();

            } catch (AuthEnCationException $e) {
                var_dump($e->getMessage()) . PHP_EOL;
            } catch (RateLimitException $e) {
                var_dump($e->getMessage()) . PHP_EOL;
            }
        }

    }
}

$app = new Application();
$app->allFilters(new AuthEnCationFilter());
$app->allFilters(new RateLimitFilter());

$app->handleRequest();
