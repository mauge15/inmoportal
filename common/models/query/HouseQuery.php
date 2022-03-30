<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\House]].
 *
 * @see \common\models\House
 */
class HouseQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \common\models\House[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\House|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    public function published()
    {
        //return $this->andWhere(['status'=> 1]);
        return $this;
    }
}
