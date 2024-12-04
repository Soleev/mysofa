@extends('layouts.app')
@section('title', 'Контакты - MySofa')
@section('description', 'Свяжитесь с нами для получения дополнительной информации о продукции MySofa.')
@section('content')
    <div class="ps-contact">
        <div class="ps-contact__left">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7129.321663250832!2d69.31596893270824!3d41.33003941604044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef50404e9ad97%3A0x29c5b71b45ac98f1!2sMy%20Sofa!5e0!3m2!1sru!2s!4v1726566181942!5m2!1sru!2s"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="ps-contact__right" data-mh="contact-1">
            <div class="ps-contact__info">
                <h3 class="ps-heading">Мы всегда на связи</h3>
                <p>Производство эксклюзивной Дорогой и качественной мебели любой сложности. Сдача объектов в четкие сроки.
                    <br> Принятие заказов по Договору
                </p>
                <div class="ps-contact__detail">
                    <p><span>Адрес:</span>Сайрам 7 тупик, дом 50, Ташкент Узбекистан</p>
                    <p><span>Тел:</span>+998 99 8870955</p>
                    <p><span>Email</span><a href="#">info@mysofa.uz</a></p>
                    <p><span>Часы работы</span>Пн - Пт : 9:00 - 18:00
                        <br> Сб - Вс : Закрыто</p>
                    <a href="https://g.page/r/CfGYrEUbt8UpEBM/review">Будем Вам благодарны за отзыв на Google</a>
                </div>
                <form class="ps-form--contact" action="do_action" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Имя">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Сообщение">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="6" placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <button class="ps-btn ps-btn--fullwidth ps-btn--black">Отправить сообщение</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
