<?php

namespace denis909\yii;

use yii\db\Expression;

trait WhereAgoTrait
{

    public function whereAgo(string $attribute, $ago)
    {
        return $this->where(['<=', $attribute , new Expression('(NOW() - ' . $ago . ')')]);
    }

    public function andWhereAgo(string $attribute, $ago)
    {
        return $this->andWhere(['<=', $attribute , new Expression('(NOW() - ' . $ago . ')')]);
    }

    public function whereHoursAgo(string $attribute, int $hours)
    {
        return $this->whereAgo($attribute, new Expression('INTERVAL ' . $hours . ' HOUR'));
    }

    public function andWhereHoursAgo(string $attribute, int $hours)
    {
        return $this->andWhereAgo($attribute, new Expression('INTERVAL ' . $hours . ' HOUR'));
    }

    public function whereMinutesAgo(string $attribute, int $minutes)
    {
        return $this->whereAgo($attribute, new Expression('INTERVAL ' . $minutes . ' MINUTE'));
    }

    public function andWhereMinutesAgo(string $attribute, int $minutes)
    {
        return $this->andWhereAgo($attribute, new Expression('INTERVAL ' . $minutes . ' MINUTE'));
    }

    public function whereHourAgo(string $attribute)
    {
        return $this->whereHoursAgo($attribute, 1);
    }

    public function andWhereHourAgo(string $attribute)
    {
        return $this->andWhereHoursAgo($attribute, 1);
    }

    public function whereDaysAgo(string $attribute, int $days)
    {
        return $this->whereAgo($attribute, new Expression('INTERVAL ' . $days . ' DAY'));
    }

    public function andWhereDaysAgo(string $attribute, int $days)
    {
        return $this->andWhereAgo($attribute, new Expression('INTERVAL ' . $days . ' DAY'));
    }

    public function whereDayAgo(string $attribute)
    {
        return $this->whereDaysAgo($attribute, 1);
    }

    public function andWhereDayAgo(string $attribute)
    {
        return $this->andWhereDaysAgo($attribute, 1);
    }

}