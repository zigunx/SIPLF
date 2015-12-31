angular.module('admin').controller('mahasiswa', function($scope, $http, $filter, $timeout, baseURL) {
    $scope.data = {};
    $scope.alerts = [];
    $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
    };
    var jurusan_id = $filter('_uriseg')(6);
    $http.get(baseURL.url('api/jurusan/') + jurusan_id + '/mahasiswa').success(function(data) {
        $scope.data = data;
        $scope.totalItems = $scope.data.length;
        $scope.currentPage = 1;
        $scope.numPerPage = 5;
        // fungsi sorting data ASC/DESC
        $scope.paginate = function(value) {
            var begin, end, index;
            begin = ($scope.currentPage - 1) * $scope.numPerPage;
            end = begin + $scope.numPerPage;
            index = $scope.data.indexOf(value);
            return (begin <= index && index < end);
        };
        $scope.$watch('query', function(query) {
            $scope.data = data;
            $scope.data = $filter('filter')($scope.data, $scope.query);
            $scope.totalItems = $scope.data.length;
            $scope.currentPage = 1;
            $scope.numPerPage = 15;
        }, true);
    })
    $scope.delete = function(id) {
        if (confirm("Anda yakin untuk menghapus data?") === true) {
            $http.delete(baseURL.url('admin/jurusan/') + jurusan_id + '/mahasiswa/' + id).success(function(data) {
                if (data.success) {
                    $http.get(baseURL.url('api/jurusan/') + jurusan_id + '/mahasiswa').success(function(data) {
                        $scope.data = data;
                        $scope.alerts.push({type: 'success', msg: 'Data Berhasil Dihapus'});
                        $timeout(function() {
                            $scope.alerts = [];
                        }, 5000);
                    })
                }
            });
        }
    }
});
angular.module('admin').controller('mahasiswacreate', function($scope, $http, $filter, $timeout, baseURL) {
    $scope.data = {};
    $scope.alerts = [];
    $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
    };
    var id = $filter('_uriseg')(6);
    $scope.data['id_jurusan'] = id;
    $scope.jurusan = {};
    $http.get(baseURL.url('api/jurusandropdown')).success(function(data) {
        $scope.jurusan = data;
    });
    $scope.submit = function() {
        $http.post(baseURL.url('admin/jurusan/') + id + '/mahasiswa', $scope.data).success(function(data) {
            if (data.success) {
                window.location.replace(baseURL.url('admin/jurusan/') + $scope.data['id_jurusan'] + '/mahasiswa');
            }
        }).error(function(e, status) {
            if (status === 422) {
                var x;
                for (x in e) {
                    $scope.alerts.push({'type': "danger", 'msg': (e[x][0])});
                }
                $timeout(function() {
                    $scope.alerts = [];
                }, 5000);
            }
        });
    }
});

angular.module('admin').controller('mahasiswacreate', function($scope, $http, $filter, $timeout, baseURL) {
    $scope.data = {};
    $scope.alerts = [];
    $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
    };
    var id = $filter('_uriseg')(6);
    $scope.data['id_jas'] = id;
    $scope.jas = {};
    $http.get(baseURL.url('api/jasdropdown')).success(function(data) {
        $scope.jas = data;
    });
    $scope.submit = function() {
        $http.post(baseURL.url('admin/jas/') + id + '/mahasiswa', $scope.data).success(function(data) {
            if (data.success) {
                window.location.replace(baseURL.url('admin/jas/') + $scope.data['id_jas'] + '/mahasiswa');
            }
        }).error(function(e, status) {
            if (status === 422) {
                var x;
                for (x in e) {
                    $scope.alerts.push({'type': "danger", 'msg': (e[x][0])});
                }
                $timeout(function() {
                    $scope.alerts = [];
                }, 5000);
            }
        });
    }
});


angular.module('admin').controller('mahasiswaedit', function($scope, $http, $filter, $timeout, baseURL) {
    $scope.data = {};
    $scope.alerts = [];
    $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
    };
    var jurusan_id = $filter('_uriseg')(6);
    var id = $filter('_uriseg')(8);
    $http.get(baseURL.url('api/mahasiswa/') + id).success(function(data) {
        $scope.data = data;
    })
    $scope.jurusan = {};
    $http.get(baseURL.url('api/jurusandropdown')).success(function(data) {
        $scope.jurusan = data;
    });
    $scope.submit = function(id) {
        $http.put(baseURL.url('admin/jurusan/') + jurusan_id + '/mahasiswa/' + id, $scope.data).success(function(data) {
            if (data.success) {
                $timeout(function() {
                    window.location.replace(baseURL.url('admin/jurusan/') + $scope.data['id_jurusan'] + '/mahasiswa');
                }, 3000);
            }
        }).error(function(e, status) {
            if (status === 422) {
                var x;
                for (x in e) {
                    $scope.alerts.push({'type': "danger", 'msg': (e[x][0])});
                }
                $timeout(function() {
                    $scope.alerts = [];
                }, 5000);
            }
        });
    }
});
