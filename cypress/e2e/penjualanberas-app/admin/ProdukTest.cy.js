/// <reference types="cypress" />

describe('Admin Can Open Produk Page', () => {
    it('Produk Page Specification', () => {
        cy.visit("http://127.0.0.1:8000/admin/produk");
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

    it('Admin Can Add Data', () => {
        cy.get('.float-end').click();
        cy.get('#nama_beras').type("Fortune");
        cy.get('#hargaberas').type(60000);
        cy.get('#berat').type(5);
        cy.get('#keterangan').type("Beras Fortune 5 kg");
        cy.get('.btn').click();
    })
  })