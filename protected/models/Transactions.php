<?php

/**
 * This is the model class for table "{{transactions}}".
 *
 * The followings are the available columns in table '{{transactions}}':
 * @property integer $id
 * @property string $plat
 * @property string $customer
 * @property string $remarks
 * @property string $supir
 * @property string $DN
 * @property double $wb_in
 * @property string $time_in
 * @property double $wb_out
 * @property string $time_out
 * @property string $opr_in
 * @property string $opr_out
 * @property string $approve
 * @property string $create_at
 * @property string $last_update
 */
class Transactions extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Transactions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{transactions}}';
	}

	public $temp;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('plat, supir, wb_in, wb_out', 'required'),
			array('wb_in, wb_out', 'numerical'),
			array('plat, DN, opr_in, opr_out, approve', 'length', 'max'=>10),
			array('customer', 'length', 'max'=>50),
			array('supir', 'length', 'max'=>15),
			array('remarks, time_in, time_out, create_at, last_update', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, plat, customer, remarks, supir, DN, wb_in, time_in, wb_out, time_out, opr_in, opr_out, approve, create_at, last_update', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'plat' => 'Truck No.',
			'customer' => 'Customer',
			'remarks' => 'Remarks',
			'supir' => 'Supir',
			'DN' => 'DN',
			'wb_in' => 'WB In',
			'time_in' => 'Time In',
			'wb_out' => 'WB Out',
			'time_out' => 'Time Out',
			'opr_in' => 'Opr In',
			'opr_out' => 'Opr Out',
			'approve' => 'Approve',
			'create_at' => 'Create At',
			'last_update' => 'Last Update',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('plat',$this->plat,true);
		$criteria->compare('customer',$this->customer,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('supir',$this->supir,true);
		$criteria->compare('DN',$this->DN,true);
		$criteria->compare('wb_in',$this->wb_in);
		$criteria->compare('time_in',$this->time_in,true);
		$criteria->compare('wb_out',$this->wb_out);
		$criteria->compare('time_out',$this->time_out,true);
		$criteria->compare('opr_in',$this->opr_in,true);
		$criteria->compare('opr_out',$this->opr_out,true);
		$criteria->compare('approve',$this->approve,true);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('last_update',$this->last_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination' => array(
				'pageSize' => 20,
			),
			'sort' => array(
				'defaultOrder' => 'time_in desc',
			),
		));
	}
}
