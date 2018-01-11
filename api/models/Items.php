<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property string $id
 * @property string $upc_ean_isbn
 * @property string $item_name
 * @property string $size
 * @property string $description
 * @property string $avatar
 * @property string $cost_price
 * @property string $selling_price
 * @property int $quantity
 * @property int $type
 * @property string $created_at
 * @property string $updated_at
 *
 * @property ItemKitItemTemps[] $itemKitItemTemps
 * @property ItemKitItems[] $itemKitItems
 * @property ItemKitItems[] $itemKitItems0
 * @property ReceivingItems[] $receivingItems
 * @property ReceivingTemps[] $receivingTemps
 * @property SaleItems[] $saleItems
 * @property SaleTemps[] $saleTemps
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['upc_ean_isbn', 'item_name', 'size', 'cost_price', 'selling_price', 'quantity'], 'required'],
            [['description'], 'string'],
            [['cost_price', 'selling_price'], 'number'],
            [['quantity', 'type'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['upc_ean_isbn', 'item_name'], 'string', 'max' => 90],
            [['size'], 'string', 'max' => 20],
            [['avatar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'upc_ean_isbn' => 'Upc Ean Isbn',
            'item_name' => 'Item Name',
            'size' => 'Size',
            'description' => 'Description',
            'avatar' => 'Avatar',
            'cost_price' => 'Cost Price',
            'selling_price' => 'Selling Price',
            'quantity' => 'Quantity',
            'type' => 'Type',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemKitItemTemps()
    {
        return $this->hasMany(ItemKitItemTemps::className(), ['item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemKitItems()
    {
        return $this->hasMany(ItemKitItems::className(), ['item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemKitItems0()
    {
        return $this->hasMany(ItemKitItems::className(), ['item_kit_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceivingItems()
    {
        return $this->hasMany(ReceivingItems::className(), ['item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReceivingTemps()
    {
        return $this->hasMany(ReceivingTemps::className(), ['item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaleItems()
    {
        return $this->hasMany(SaleItems::className(), ['item_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaleTemps()
    {
        return $this->hasMany(SaleTemps::className(), ['item_id' => 'id']);
    }
}
