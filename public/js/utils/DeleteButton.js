class DeleteButton {
    constructor(id, fetch, vegpont) {
        this.iconHozzaAdas();
        //this.onClickAdas(id, fetch, vegpont);
    }
    iconHozzaAdas() {
        return '<ion-icon name="trash-outline" class="dlticon btn btn-danger"></ion-icon>';
    }
    onClickAdas(id, fetch, vegpont) {
        console.log("hello");
        document
            .querySelector(".dlticon")
            .addEventListener("click", fetch(vegpont + "/" + id));
    }
}

export default DeleteButton;
