/// <reference types="cypress" />

describe('Admin Can Open Produk Page', () => {
    it('Admin Can Read Page Produk', () => {
        Cypress.on('uncaught:exception', (err, runnable) => {
            return false;
          });
        cy.visit("http://127.0.0.1:8000/login");
        cy.get('[name="username"]').type("admin2");
        cy.get('[name="password"]').type("admin2");
        cy.get('[name="login"]').click();
        cy.get(':nth-child(3) > .sidebar-link > .fa').click();
        cy.get('.page-title').should("have.text", "Produk");
        cy.get('.box-title').should("have.text", "Data Produk");
        cy.get('.float-end').should("have.text","Tambah Data");
        cy.get('thead > tr > :nth-child(1)').should("have.text","ID");
        cy.get('thead > tr > :nth-child(2)').should("have.text","Nama Beras");
        cy.get('thead > tr > :nth-child(3)').should("have.text","Harga");
        cy.get('thead > tr > :nth-child(4)').should("have.text","Berat");
        cy.get('thead > tr > :nth-child(5)').should("have.text","Foto");
        cy.get('thead > tr > :nth-child(6)').should("have.text","Keterangan");
        cy.get('thead > tr > :nth-child(7)').should("have.text","Action");
    })

    it('Admin Can Create Data', () => {
        Cypress.on('uncaught:exception', (err, runnable) => {
            return false;
          });
        cy.visit("http://127.0.0.1:8000/login");
        cy.get('[name="username"]').type("admin2");
        cy.get('[name="password"]').type("admin2");
        cy.get('[name="login"]').click();
        cy.get(':nth-child(3) > .sidebar-link > .fa').click();
        cy.get('.float-end').click();
        cy.get('#nama_beras').type("Fortune");
        cy.get('#hargaberas').type(60000);
        cy.get('#berat').type(5);
        cy.get('#photo').selectFile('tests/cypress/fixtures/fortune.png');
        cy.get('#keterangan').type("Beras Fortune 5 kg");
        cy.get('.btn').click();
    })

    it('Admin Can Edit Data', () => {
        Cypress.on('uncaught:exception', (err, runnable) => {
            return false;
          });
        cy.visit("http://127.0.0.1:8000/login");
        cy.get('[name="username"]').type("admin2");
        cy.get('[name="password"]').type("admin2");
        cy.get('[name="login"]').click();
        cy.get(':nth-child(3) > .sidebar-link > .fa').click();
        cy.get(':nth-child(2) > :nth-child(7) > form > a.btn').click();
        cy.get('#nama_beras').clear().type("Fortune Premium");
        cy.get('#hargaberas').clear().type(65000);
        cy.get('#keterangan').clear().type("Beras Fortune Premium 5 kg");
        cy.get('.btn').click();
    })

    it('Admin Can Delete Data', () => {
        Cypress.on('uncaught:exception', (err, runnable) => {
            return false;
          });
        cy.visit("http://127.0.0.1:8000/login");
        cy.get('[name="username"]').type("admin2");
        cy.get('[name="password"]').type("admin2");
        cy.get('[name="login"]').click();
        cy.get(':nth-child(3) > .sidebar-link > .fa').click();
        cy.get(':nth-child(2) > :nth-child(7) > form > button.btn').click();
    })
  })