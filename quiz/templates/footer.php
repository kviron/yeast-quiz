<style>
    .yq-footer{
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 30px;
    }
    .yq-footer__progressbar{
        background-color: grey;
        flex-grow: 1;
    }
    .yq-footer__wrapper{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    #yq_progressbar{
        width: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        font-size: 8px;
    }
    .yq-footer__progressbar{
        height: 5px;
    }
    .yq-footer__buttons{
        margin-left: 30px;
    }
</style>

<div class="yq-footer">
    <div class="yq-footer__wrapper">
        <div class="yq-footer__progressbar">
            <div id="yq_progressbar"></div>
        </div>
        <div class="yq-footer__buttons">
            <div class="yq-button yq-button--prev">
                Назад
            </div>
            <div class="yq-button yq-button--next">
                Дальше
            </div>
        </div>
    </div>
</div>