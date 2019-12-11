 
 <!--Форма обратной связи-->
 <form action="action_page.php" style="border:1px solid black">
    <div class="container">
      <h1>Закажите обратый звонок</h1>
      <p>Пожалуйста заполните все формы, что бы специалист четко понимал с кем ему придется работать</p>
      <hr>

      <label for="phone">Номер телефона</label>
      <input type="text" placeholder="Введите телефон" name="phone" required>

      <label for="name">Имя ребенка</label>
      <input type="text" placeholder="Введите имя ребенка" name="name" required>

      <label for="age">Возраст ребенка</label>
      <input type="text" name="age" placeholder="Введите возраст ребенка" required>

      <label for="about"></label>
      <input type="text-area" name="about" placeholder="Опишите проблемы или беспокойства" id="">
    </div>
  </form>