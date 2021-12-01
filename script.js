function Get() {
    alert('function Get');
    //сделайте запрос к файлу get.php так чтобы там сработало условие и вернулись данные
    //в запросе передайте произвольный массив c ключем "arr"
    $.post('../php/get.php', {arr: arr[1, 2, 3], get: true}, function(data) {
    let receivedData = JSON.parse(data);
    console.log(receivedData);
  })
}

// $.post('../php/receiveDataToChange.php', {dbName: localStorage.getItem('dbName'), dbUser: localStorage.getItem('dbUser'),
//                                           dbPassword: localStorage.getItem('dbPassword'),
//                                           loadType: "areaToChange",
//                                           area: changeDBTablesLocalVars.areaCurrentValue}, function(data) {
//     changeDBTablesLocalVars.salesPartnersList = JSON.parse(data);
//     populateOptionList();
//   })