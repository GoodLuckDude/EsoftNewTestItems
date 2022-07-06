### Вёрстка
1. Как браузер обрабатывает страницу?
2. Какие типы отображения элементов знаешь? В чём их отличия? (jun: none, block, inline, inline-block; middle: +flex, grid)
3. Марджины от паддингов отличаются? При задании размеров элемента учитываются отступы? Что делает `box-sizing: border-box;`
4. Что такое семантические теги? Для чего они нужны? Какие знаешь? (middle)

### JS
1. В чём разница в работе? (Мне кажется, что на джуна можно спросить)
```js
const a = [1];
a.push(2);
```
___
```js
const c = [1];
c = [1, 2];
```
2. В каком порядке выведутся сообщения и почему:
```js
console.log('start');

setTimeout(() => console.log('timeout'), 0);

const promise = new Promise((resolve) => resolve('promise'));
promise.then(result => console.log(result));

console.log('finish');
```

### 