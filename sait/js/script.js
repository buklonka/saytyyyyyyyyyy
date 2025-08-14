document.addEventListener('DOMContentLoaded', function() {
    const calculateBtn = document.getElementById('calculate-btn');
    if (calculateBtn) {
        calculateBtn.addEventListener('click', function() {
            const depositInput = document.getElementById('deposit');
            const bonusPercentInput = document.getElementById('bonus-percent');
            const wagerInput = document.getElementById('wager');
            const resultDiv = document.getElementById('result');

            const deposit = parseFloat(depositInput.value);
            const bonusPercent = parseFloat(bonusPercentInput.value);
            const wager = parseInt(wagerInput.value, 10);

            if (isNaN(deposit) || isNaN(bonusPercent) || isNaN(wager) || deposit <= 0 || bonusPercent <= 0 || wager <= 0) {
                resultDiv.innerHTML = '<p style="color: #8a2a3e;">Пожалуйста, введите корректные данные во все поля.</p>';
                return;
            }

            const bonusAmount = deposit * (bonusPercent / 100);
            const totalAmount = deposit + bonusAmount;
            const wagerAmount = totalAmount * wager;

            resultDiv.innerHTML = `
                <p>Сумма вашего бонуса: <strong>${bonusAmount.toFixed(2)}</strong></p>
                <p>Общая сумма на балансе: <strong>${totalAmount.toFixed(2)}</strong></p>
                <hr style="border-color: var(--color-border);">
                <p style="font-size: 1.2rem;">Для отыгрыша бонуса вам необходимо сделать ставок на общую сумму: <br><strong style="color: var(--color-gold); font-size: 1.5rem;">${wagerAmount.toFixed(2)}</strong></p>
            `;
        });
    }
});
