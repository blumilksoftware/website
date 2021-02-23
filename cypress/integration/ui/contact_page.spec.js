describe('contact page', () => {
    before(function () {
        cy.visit('/contact')
    })

    it('loads successfully', () => {
        cy.url().should('include', '/contact')
    })

    it('fills contact form', () => {
        cy.get('.md\\:px-12 > .px-4')
            .type('I would like to ask you about...')
            .should('have.value', 'I would like to ask you about...')

        cy.get('#emailAddress')
            .type('email@example.com')
            .should('have.value', 'email@example.com')
    })

    it('checks map', () => {
        cy.get('.mapboxgl-canvas')
        cy.get('.mapboxgl-marker')
            .should('have.attr', 'href')
            .and('equal', 'https://google.com/maps/search/?api=1&query=51.208719304013975,16.163746516015646')
    })
})
