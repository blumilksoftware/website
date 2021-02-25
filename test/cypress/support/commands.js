Cypress.Commands.add('apiUrl', (urlPath) => {
  cy.visit(Cypress.env('HOST') + urlPath)
})
