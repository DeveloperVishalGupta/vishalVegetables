function calltoster(title, massage,color) {
    iziToast.show({
        position: 'topRight',
        title: title,
        message: massage,
        zindex:999999999,
        color:color,
        transitionIn: 'bounceInDown'// bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
        // theme: 'dark'

    });
}
console.log(calltoster);