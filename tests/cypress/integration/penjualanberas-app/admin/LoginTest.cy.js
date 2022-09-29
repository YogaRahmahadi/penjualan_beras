/// <reference types="cypress" />

describe('Admin Can Open Login Page', () => {
    it('Admin Can Login', () => {
        Cypress.on('uncaught:exception', (err, runnable) => {
            return false;
          });
        cy.visit("http://127.0.0.1:8000/login");
        cy.get('.fw-bold').should("have.text", "Sign In");
        cy.get('form > :nth-child(2) > .form-outline > .form-label').contains("Username");
        cy.get(':nth-child(3) > .form-label').contains("Password");
        cy.get('.btn').contains("Login");
        cy.get('.nav-link').contains("Register");
        cy.get('[name="username"]').type("admin2");
        cy.get('[name="password"]').type("admin2");
        cy.get('[name="login"]').click();
    })
})