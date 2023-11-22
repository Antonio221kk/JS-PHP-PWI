import {showDataSelect} from "./functions.js";

const tableBooks = document.querySelector("table");

// Seletor para a modal
const modal = document.querySelector("#edit-modal");

// Seletor para o botão de fechar a modal
const closeModalButton = document.querySelector(".close");

// Seletor para o formulário de edição
const editForm = document.querySelector("#edit-form");

// Função para abrir a modal com dados do produto (vai receber por parâmetro o id do produto)
function openModal() {
    modal.style.display = "block";
}

// Fechar a modal ao clicar no botão de fechar
closeModalButton.addEventListener("click", () => {
    modal.style.display = "none";
});

// Fechar a modal quando o usuário clicar fora dela
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});

tableBooks.addEventListener("click", (event) => {
    if(event.target.tagName === "TD"){
        console.log(`Mostrar: ${event.target.parentNode.getAttribute("book-id")}`);
        const urlGetBook = `api/book-get.php?bookId=${event.target.parentNode.getAttribute("book-id")}`;
        fetch(urlGetBook).then((response) => {
            response.json().then((book) => {
                // console.log(book);
                // preencher o formulário com os dados do livro
                editForm.id.value = book.id;
                editForm.title.value = book.title;
                editForm.category_id.value = book.category_id;
                editForm.author_id.value = book.author_id;
                editForm.price.value = book.price;
            });
        });
        openModal();
    }

    if(event.target.tagName === "BUTTON"){
        console.log(`Apagar: ${event.target.parentNode.parentNode.getAttribute("book-id")}`);
        const urlDeleteBook = `api/book-delete.php?bookId=${event.target.parentNode.parentNode.getAttribute("book-id")}`;
        fetch(urlDeleteBook).then((response) => {
            response.json().then((data) => {
                //console.log(data.type);
                if(data.type == "success"){
                    event.target.parentNode.parentNode.remove();
                    console.log(data);
                }
            });
        });
    }
});

const selectCategories = document.querySelector("#category");
const selectCategoriesModal = document.querySelector("#category_id");
const selectAuthors = document.querySelector("#author");
const selectAuthorsModal = document.querySelector("#author_id");

const urlGetCategories = "api/categories-list.php";
const urlGetAuthors = "api/authors-list.php";
const optionsGet = {
    method: "GET"
};

fetch(urlGetCategories, optionsGet).then((response) => {
    response.json().then((categories) => {
        showDataSelect(categories, selectCategories);
        showDataSelect(categories, selectCategoriesModal);
    });
});

fetch(urlGetAuthors, optionsGet).then((response) => {
    response.json().then((authors) => {
        showDataSelect(authors, selectAuthors);
        showDataSelect(authors, selectAuthorsModal);
    });
});

selectCategories.addEventListener("change", () => {
    const urlBooksByCategory = `api/books-by-category.php?category_id=${selectCategories.value}`;
    fetch(urlBooksByCategory, optionsGet).then((response) => {
        response.json().then((books) => {
            //console.log(books);
            const tableBooks = document.querySelector("#bookList");
            // limpa a tabela
            tableBooks.innerHTML = "";
            books.forEach((book) => {
                //console.log(book);
                const tr = document.createElement("tr");
                tr.setAttribute("book-id", book.id);
                // parei aqui
                tr.innerHTML = `
                <td>${book.id}</td>
                <td>${book.title}</td>
                <td>${book.price}</td>
                <td><button>X</button></td>
                `;
                tableBooks.appendChild(tr);
            });
        });
    });
});