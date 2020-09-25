class Repositories {

    constructor()
    {
        this.cloneModal      = $('#cloneModal')
        this.alertCopy       = $('#alert-copy')
        this.selectCloneType = $('#select-clone-type')
        this.inputUrlClone   = $('#input-url-clone')
        this.https           = ''
        this.ssh             = ''
    }

    init()
    {
        const _this = this

        $('.btn-clone').on('click', function() {
            _this.https = `git clone ${$(this).data('https')}`
            _this.ssh   = `git clone ${$(this).data('ssh')}`

            _this.selectCloneType.val('https')
            _this.inputUrlClone.val(_this.https)

            _this.alertCopy.hide()
            _this.cloneModal.modal('show')
        })

        _this.selectCloneType.on('change', function() {
            _this.inputUrlClone.val(_this.selectCloneType.val() == 'https' ? _this.https : _this.ssh)
            _this.alertCopy.hide()
        })

        _this.inputUrlClone.on('click', function() {
            _this.inputUrlClone.select()
            document.execCommand('copy')
            _this.alertCopy.show('fast')
        })

        _this.alertCopy.hide()
    }
}

new Repositories().init()
