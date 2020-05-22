@extends('layouts.layout')

@section('content')

    <div class="block">
        <div class="block-title">
            <h2>Create new File</h2>
        </div>

        {!! Form::open(['action' => ['IndexController@store'], 'role' => 'form', 'class' => 'form-bordered']) !!}

        <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="name">Имя файла</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Вид сообщения</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="DeliveryNoteType" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Уникальный номер электронного сообщения</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="DocumentID" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Дата и время создания накладной</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="CreationDateTime" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Функция накладной</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="FunctionCode" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Номер накладной</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="DeliveryNotelD" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Дата накладной</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="DeliveryNoteDate" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Номер документа</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="ContractlD" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Дата документа</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="ContractDate" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Номер путевого листа</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="WayBillID" required="required">
                </div>
            </div>

            <div class="col-md-12">
                <h2>Document</h2>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Номер документа</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Document[DocumentlD]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Дата документа</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Document[DocumentDate]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Наименование документа</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Document[DocumentName]" required="required">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h2>Shipper</h2>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">GLN-номер грузоотправителя</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Shipper[GLN]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Наименование грузоотправителя</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Shipper[Name]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Адрес грузоотправителя</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Shipper[Address]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">УНП грузоотправителя</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Shipper[VАTRegistrationNumber]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Отпуск разрешил</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Shipper[Соntасt]" required="required">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h2>Receiver</h2>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">GLN-номер грузополучателя</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Receiver[GLN]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Наименование грузополучателя</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Receiver[Name]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Адрес грузополучателя</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Receiver[Address]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">УНП грузополучателя</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Receiver[VАTRegistrationNumber]" required="required">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h2>ShipFrom</h2>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">GLN-номер пункта погрузки</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="ShipFrom[GLN]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Адрес пункта погрузки</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="ShipFrom[Address]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Сдал грузоотправитель</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="ShipFrom[Contact]" required="required">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h2>ShipTo</h2>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">GLN-номер пункта разгрузки</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="ShipTo[GLN]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Адрес пункта разгрузки</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="ShipTo[Address]" required="required">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h2>FreightPayer</h2>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">GLN-номер заказчика автомобильной
                            перевозки (плательщика)
                        </label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="FreightPayer[GLN]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Наименование заказчика автомобильной перевозки (плательщика)</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="FreightPayer[Name]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Адрес заказчика автомобильной перевозки (плательщика)</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="FreightPayer[Address]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">УНП заказчика автомобильной перевозки (плательщика</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="FreightPayer[VАTRegistrationNumber]" required="required">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h2>Carrier</h2>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Водитель</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Carrier[TransportContact]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Товар к перевозке принял</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Carrier[DeliveryContact]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Номер доверенности</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Carrier[ProxylD]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Дата доверенности</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Carrier[ProxyDate]" required="required">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Наименование организации, выдавшей доверенность</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Carrier[PartylssuingProxyName]" required="required">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Количество ездок</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="QuantityTrip" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Владелец автомобиля</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="TransportOwnerName" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Марка и государственный номер автомобиля</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="TransportlD" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Марка и государственный номер прицепа</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="TrailerlD" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Номер пломбы</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="SealID" required="required">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Код валюты</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Enter name" name="Currency" required="required">
                </div>
            </div>

            <div class="col-md-12 form-group form-actions">
                <button type="submit" class="btn btn-success btn-label right10"><span><i class="fa fa-save"></i></span>
                    Create
                </button>

                <a class="btn btn-default btn-label" href= {{ URL::previous() }}><span><i class="fa fa-ban"></i></span>
                    Cancel</a>
            </div>

            {!! Form::close() !!}
        </div>
@endsection
