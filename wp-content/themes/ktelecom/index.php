<?php get_header();?>
<section class="tariffs-post">
    <div class="post-info">
        <div class="post-text">
            <h1>Экономия нервов и денег — интернет К-Телеком</h1>
            <p>5 тарифов для многоквартирных и 4 для частных домов<br>
                безлимит подключенных устройств<br>
                комфортная поддержка 24/7
            </p>
        </div>
        <button class="btn-more">
            Подробнее
        </button>
    </div>
    <div class="post-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/left.png" alt="Логотип" class="post-img">
    </div>
</section>

    <section class="tariffs">
        <h1 class="tariff-tittle">Тарифные планы</h1>
        <div class="slider owl-carousel">
            <div class="slide">
                <div class="info-slide">
                    <h4>Мой клик</h4>
                    <p>Скорость интернета</p>
                    <h2>до 40 Мбит/с</h2>
                    <p>Отличный вариант для пенсионеров, выполнения определенных задач и работы с файлами различных размеров.</p>
                    <div>
                        <div>
                            <input type="checkbox" id="tv-option-1">
                            <label for="tv-option-1">ТВ + 100 ₽</label>
                            <p>(пакет “Базовый”)</p>
                        </div>
                    </div>
                    <div>
                        <h1>399 ₽</h1>
                        <p>в месяц</p>
                    </div>
                    <p>*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости</p>
                    <button class="btn-tariff">Выбрать тариф</button>
                </div>
            </div>
            <div class="slide">
                <h4>Мой клик</h4>
                <p>Скорость интернета</p>
                <h2>до 40 Мбит/с</h2>
                <p>Отличный вариант для пенсионеров, выполнения определенных задач и работы с файлами различных размеров.</p>
                <div>
                    <div>
                        <input type="checkbox" id="tv-option-2">
                        <label for="tv-option-2">ТВ + 100 ₽</label>
                        <p>(пакет “Базовый”)</p>
                    </div>
                </div>
                <div>
                    <h1>399 ₽</h1>
                    <p>в месяц</p>
                </div>
                <p>*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости</p>
                <button class="btn-tariff-done">Выбрать тариф</button>
            </div>
            <div class="slide">
                <h4>Мой клик</h4>
                <p>Скорость интернета</p>
                <h2>до 40 Мбит/с</h2>
                <p>Отличный вариант для пенсионеров, выполнения определенных задач и работы с файлами различных размеров.</p>
                <div>
                    <div>
                        <input type="checkbox" id="tv-option-3">
                        <label for="tv-option-3">ТВ + 100 ₽</label>
                        <p>(пакет “Базовый”)</p>
                    </div>
                </div>
                <div>
                    <h1>399 ₽</h1>
                    <p>в месяц</p>
                </div>
                <p>*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости</p>
                <button class="btn-tariff">Выбрать тариф</button>
            </div>
            <div class="slide">
                <h4>Мой клик</h4>
                <p>Скорость интернета</p>
                <h2>до 40 Мбит/с</h2>
                <p>Отличный вариант для пенсионеров, выполнения определенных задач и работы с файлами различных размеров.</p>
                <div>
                    <div>
                        <input type="checkbox" id="tv-option-4">
                        <label for="tv-option-4">ТВ + 100 ₽</label>
                        <p>(пакет “Базовый”)</p>
                    </div>
                </div>
                <div>
                    <h1>399 ₽</h1>
                    <p>в месяц</p>
                </div>
                <p>*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости</p>
                <button class="btn-tariff">Выбрать тариф</button>
            </div>
        </div>
    </section>
    <section class="contact-form">
        <h1 class="contact-form__title">Подключиться просто!</h1>
        <?php echo do_shortcode('[contact-form-7 id="f0b89e8" title="feedback form"]'); ?>
    </section>
<?php get_footer();?>