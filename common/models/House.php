<?php

namespace common\models;

use Yii;
use yii\helpers\FileHelper;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\helpers\StringHelper;
/**
 * This is the model class for table "{{%houses}}".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property string|null $image
 * @property float|null $price
 * @property int $status
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int $type
 * @property float|null $surface
 * @property int|null $bedrooms
 * @property int|null $bathrooms
 * @property int|null $floor
 * @property int|null $has_garage
 * @property string|null $address
 * @property string|null $location
 * @property float|null $latitude
 * @property float|null $longitude
 *
 * @property User $createdBy
 * @property User $updatedBy
 */
class House extends \yii\db\ActiveRecord
{
     /**
     * @var \yii\web\UploadedFile
     */
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%houses}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            BlameableBehavior::class
        ];
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'status', 'type'], 'required'],
            [['description'], 'string'],
            [['imageFile'], 'image', 'extensions' => 'png, jpg, jpeg, webp', 'maxSize' => 10 * 1024 * 1024],
            [['image'], 'string', 'max' => 2000],
            [['price', 'surface', 'latitude', 'longitude'], 'number'],
            [['status', 'created_at', 'updated_at', 'created_by', 'updated_by', 'type', 'bedrooms', 'bathrooms', 'floor', 'has_garage'], 'integer'],
            [['name', 'address', 'location'], 'string', 'max' => 255],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nombre',
            'description' => 'Descripción',
            'price' => 'Precio',
            'image' => 'Fotos',
            'imageFile' => 'Fotos',
            'status' => 'Publicado',
            'created_at' => 'Fecha creación',
            'updated_at' => 'Fecha actualización',
            'created_by' => 'Creado por',
            'updated_by' => 'Actualizado por',
            'type' => 'Tipo',
            'surface' => 'Superficie',
            'bedrooms' => 'Habitaciones',
            'bathrooms' => 'Baños',
            'floor' => 'Planta',
            'has_garage' => 'Tiene Garaje',
            'address' => 'Dirección',
            'location' => 'Ubicación',
            'latitude' => 'Latitud',
            'longitude' => 'Longitud',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * Gets query for [[UpdatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\HouseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\HouseQuery(get_called_class());
    }

    public function save($runValidation = true, $attributeNames = null)
    {
       
        if ($this->imageFile){
            $this->image = '/houses/'.Yii::$app->security->generateRandomString(255).'/'.$this->imageFile->name;
        }
     
        $transaction = Yii::$app->db->beginTransaction();
        
        $ok =  parent::save($runValidation,$attributeNames);
        /*echo '<pre>';
        var_dump($this->image);
        echo '</pre>';
        exit;*/
        
        if ($ok)
        {
            $fullPath =  Yii::getAlias('@frontend/web/storage'.$this->image);
            $dir = dirname($fullPath);

           /* echo "<pre>";
            var_dump($fullPath);
            echo '</pre>';
            exit;
*/
            if (!FileHelper::createDirectory($dir) | !$this->imageFile->saveAs($fullPath)){
                $transaction->rollBack();
                return false;
            }

            /*echo "<pre>";
            var_dump( $dir);
            echo '</pre>';
            exit;*/
             $transaction->commit();
        }
        return $ok;

    }

    public function getImageUrl(){
        if ($this->image)
        {
        return Yii::$app->params['frontendUrl'].'/storage'.$this->image;
        }
        return Yii::$app->params['frontendUrl'].'/img/nophoto.webp';
    }

    public function getShortDescription()
    {
        return StringHelper::truncateWords($this->description, 30);
    }
}
