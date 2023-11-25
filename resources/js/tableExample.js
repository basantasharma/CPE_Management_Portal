
new DataTable('#example', {
    initComplete: function () {
        this.api()
            .columns()
            .every(function () {
                let column = this;
                let title = column.footer().textContent;
 
                // Create input element
                let input = document.createElement('input');
                input.placeholder = title;
                column.footer().replaceChildren(input);
 
                // Event listener for user input
                input.addEventListener('keyup', () => {
                    if (column.search() !== this.value) {
                        column.search(input.value).draw();
                    }
                });
            });
    },

    
    // this will hide columns 2 and 3
    columnDefs: [
        {
            target: 2,
            visible: false,
            searchable: false
        },
        {
            target: 3,
            visible: false
        }
    ]
});