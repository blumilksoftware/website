describe('contact page', () => {
    before(() =>{
        cy.visit('/contact')
    })

    it('loads successfully', () => {
        cy.url().should('include', '/contact')
    })

    it('fills contact form', () => {
        cy.get('[data-cy="contact-form-question"]')
            .type('I would like to ask you about...')
            .should('have.value', 'I would like to ask you about...')

        cy.get('[data-cy="contact-form-email"]')
            .type('email@example.com')
            .should('have.value', 'email@example.com')
    })

    it('checks map', () => {
        cy.get('.mapboxgl-marker')
            .should('have.attr', 'href')
            .and('equal', 'https://google.com/maps/search/?api=1&query=51.208719304013975,16.163746516015646')
    })
})
