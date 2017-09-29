/*js 文件会在html执行之前执行
  question:1.如何使用依赖库，jquery,vue等
  2.如何让js文件在html执行完成后执行
 */
window.onload = function () {
  // document.getElementById('submit').addEventListener('click', function () {
  //   alert(document.getElementById('phrase').value);
  // });
  console.log('this is the js in the module in the window.onload')
  new Vue({
    el: "#demo",
    data: {
      phrase: '123s'
    },
    computed: {
      length: function () {
        return this.phrase.length;
      }
    },
    methods:{
      reverse:function () {
        this.phrase = this.phrase.split('').reverse().join('');
      }
    }
  });

};
console.log('this is the js in the module out window.onload')
// (function ($) {
//   console.log('test vue demo')
//   $('#submit').click(function () {
//     alert("submit success!");
//   });
//
// })(jQuery);



