<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema RH</title>

    <!-- fiz o css no corpo do blade pois não mexo muito bem com front
     e tive problemas para linkar o app.css e as outras tentativas
     de pastas do css com as blades -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .text-end {
            text-align: right;
            margin-bottom: 20px;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .form-group select:focus,
        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: #f00;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="text-end mb-4">
            <a href="<?php echo e(route('user.index')); ?>" class="btn btn-primary">Listar Colaboradores</a>
        </div>

        <h2>Cadastrar Usuário</h2>

        <?php if($errors->any()): ?>
            <div class="alert alert-warning">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="error"><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('user.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" placeholder="Nome completo" value="<?php echo e(old('name')); ?>" required>
            </div>

            <div class="form-group">
                <label for="setor">Setor:</label>
                <select id="setor" name="setor" required>
                    <option value="">-- Selecione o setor --</option>
                    <option value="TI" <?php echo e(old('setor') == 'TI' ? 'selected' : ''); ?>>Tecnologia da Informação</option>
                    <option value="ADM" <?php echo e(old('setor') == 'ADM' ? 'selected' : ''); ?>>Administração</option>
                    <option value="PROJECT" <?php echo e(old('setor') == 'PROJECT' ? 'selected' : ''); ?>>Projetos</option>
                </select>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade (capital):</label>
                <select id="cidade" name="cidade" required>
                    <option value="">-- Selecione a capital --</option>
                    <option value="Rio Branco" <?php echo e(old('cidade') == 'Rio Branco' ? 'selected' : ''); ?>>Rio Branco</option>
                    <option value="Maceió" <?php echo e(old('cidade') == 'Maceió' ? 'selected' : ''); ?>>Maceió</option>
                    <option value="Macapá" <?php echo e(old('cidade') == 'Macapá' ? 'selected' : ''); ?>>Macapá</option>
                    <option value="Manaus" <?php echo e(old('cidade') == 'Manaus' ? 'selected' : ''); ?>>Manaus</option>
                    <option value="Salvador" <?php echo e(old('cidade') == 'Salvador' ? 'selected' : ''); ?>>Salvador</option>
                    <option value="Fortaleza" <?php echo e(old('cidade') == 'Fortaleza' ? 'selected' : ''); ?>>Fortaleza</option>
                    <option value="Brasília" <?php echo e(old('cidade') == 'Brasília' ? 'selected' : ''); ?>>Brasília</option>
                    <option value="Vitória" <?php echo e(old('cidade') == 'Vitória' ? 'selected' : ''); ?>>Vitória</option>
                    <option value="Goiânia" <?php echo e(old('cidade') == 'Goiânia' ? 'selected' : ''); ?>>Goiânia</option>
                    <option value="São Luís" <?php echo e(old('cidade') == 'São Luís' ? 'selected' : ''); ?>>São Luís</option>
                    <option value="Cuiabá" <?php echo e(old('cidade') == 'Cuiabá' ? 'selected' : ''); ?>>Cuiabá</option>
                    <option value="Campo Grande" <?php echo e(old('cidade') == 'Campo Grande' ? 'selected' : ''); ?>>Campo Grande</option>
                    <option value="Belo Horizonte" <?php echo e(old('cidade') == 'Belo Horizonte' ? 'selected' : ''); ?>>Belo Horizonte</option>
                    <option value="Belém" <?php echo e(old('cidade') == 'Belém' ? 'selected' : ''); ?>>Belém</option>
                    <option value="João Pessoa" <?php echo e(old('cidade') == 'João Pessoa' ? 'selected' : ''); ?>>João Pessoa</option>
                    <option value="Curitiba" <?php echo e(old('cidade') == 'Curitiba' ? 'selected' : ''); ?>>Curitiba</option>
                    <option value="Recife" <?php echo e(old('cidade') == 'Recife' ? 'selected' : ''); ?>>Recife</option>
                    <option value="Teresina" <?php echo e(old('cidade') == 'Teresina' ? 'selected' : ''); ?>>Teresina</option>
                    <option value="Rio de Janeiro" <?php echo e(old('cidade') == 'Rio de Janeiro' ? 'selected' : ''); ?>>Rio de Janeiro</option>
                    <option value="Natal" <?php echo e(old('cidade') == 'Natal' ? 'selected' : ''); ?>>Natal</option>
                    <option value="Porto Alegre" <?php echo e(old('cidade') == 'Porto Alegre' ? 'selected' : ''); ?>>Porto Alegre</option>
                    <option value="Porto Velho" <?php echo e(old('cidade') == 'Porto Velho' ? 'selected' : ''); ?>>Porto Velho</option>
                    <option value="Boa Vista" <?php echo e(old('cidade') == 'Boa Vista' ? 'selected' : ''); ?>>Boa Vista</option>
                    <option value="Florianópolis" <?php echo e(old('cidade') == 'Florianópolis' ? 'selected' : ''); ?>>Florianópolis</option>
                    <option value="São Paulo" <?php echo e(old('cidade') == 'São Paulo' ? 'selected' : ''); ?>>São Paulo</option>
                    <option value="Aracaju" <?php echo e(old('cidade') == 'Aracaju' ? 'selected' : ''); ?>>Aracaju</option>
                    <option value="Palmas" <?php echo e(old('cidade') == 'Palmas' ? 'selected' : ''); ?>>Palmas</option>
                </select>
            </div>

            <button type="submit">Cadastrar</button>
        </form>
    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\SistemaRH\resources\views/users/create.blade.php ENDPATH**/ ?>