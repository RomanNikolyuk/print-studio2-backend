class Table {
    constructor(tClass, tSearch) {

        this.tableBody = document.querySelector('.' + tClass + ' tbody ');
        this.rows = document.querySelectorAll('.' + tClass + ' tbody '  + ' tr');
        this.input = document.querySelector('.' + tSearch);

        this.listener()
    }

    listener() {
        this.input.addEventListener('input', ({target}) => {
            const {value} = target;

            const fRows = this.finder(value);
            this.cleaner(fRows);
        });
    }

    finder(value) {
        const returnArr = [];

        this.rows.forEach(row => {

            row.childNodes.forEach((td) => {
                const regExp = new RegExp(value, 'i');
                const result = td.textContent.match(regExp);

                result ? returnArr.push(row) : '';
            });

        });
        return returnArr
    }

    cleaner(fRows) {
        this.rows.forEach(row => row.remove());

        this.tableBody.append(...fRows);
    }
}

new Table('table1', 'table1__search');
new Table('table2', 'table2__search');