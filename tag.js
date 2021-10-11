var s = ''
var a = '1112031584'
for (var i = 1; 1 < length(a); i++) {
    if (a[i] % 2 == a[i-1] % 2) {
        s += max(a[i], a[i-1])
    }
}
goto_url('www.multisoft.se/' + s);