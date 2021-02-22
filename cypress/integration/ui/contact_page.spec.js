describe('contact page', () => {

    it('loads successfully', () => {
        cy.url().should('include', '/contact')
    })

    it('fill contact form', () => {
        cy.visit('/')

        cy.contains('Contact').click()

        cy.url().should('include', '/contact')

        cy.get('.md\\:px-12 > .px-4')
            .type('I would like to ask you about...')
            .should('have.value', 'I would like to ask you about...')

        cy.get('#emailAddress')
            .type('email@example.com')
            .should('have.value', 'email@example.com')
    })
})