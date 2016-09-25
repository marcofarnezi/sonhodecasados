angular.module('sonhodecasados', ['ngMaterial', 'ngMessages'])
    .config(function($mdDateLocaleProvider) {
        $mdDateLocaleProvider.formatDate = function(date) {
            if (!date)
            {
                return '00/00/0000';
            }
            var day = date.getDate();
            var monthIndex = date.getMonth();
            var year = date.getFullYear();
            var month = monthIndex + 1;

            if (String(month).length == 1)
            {
                month = '0'+month;
            }

            if (String(day).length == 1)
            {
                day = '0'+day;
            }

            return day + '/' + (month) + '/' + year;
        };
    });