<form class="contact_form" action="#">
    <div class="ask">

        <div class="title">
            <h2>Новый вопрос</h2>
            <hr>
        </div>

        <div class="title">
            <h3>Суть вопроса</h3>
            <p>Сформулируйте вопрос так, чтобы было сразу понятно, о чем речь</p>
            <!-------обработка поля в php-->
            <textarea name="question-title" id="question" cols="130" rows="2" maxlength="130"
                      placeholder="Введите вопрос"
                      required></textarea>
        </div>

        <div class="title">
            <h3>Теги вопроса</h3>
            <p>Ключевые слова от 1 до 5 штук</p>
            <!-------обработка поля в php-->
            <textarea name="question-tags" id="tags" cols="130" rows="2" maxlength="130"
                      placeholder="Введите теги"
                      required></textarea>

        </div>

        <div class="title">
            <h3>Детали вопроса</h3>
            <p>Опишите в подробностях свой вопрос</p>
            <!------обработка поля в php-->
            <!---------!!!!написать текстовой редактор(js/php)-->
            <textarea name="question-desc" id="question_description" cols="130" rows="10" maxlength="600"
                      placeholder="Введите подробности" required></textarea>
        </div>

        <!------обработка поля в php-->
        <input type="submit" class="btn" value="Отправить">
    </div>
</form>