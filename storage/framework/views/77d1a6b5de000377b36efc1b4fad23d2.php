<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema RH</title>

    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f             
            padding: 0;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
            color: #333;
        }

        a {
            display: block;
            margin: 10px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        
        form {
            background-color: #fff;
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            font-size: 1rem;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, select, button {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        input:focus, select:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            background-color: #007bff;
            color: white;
            font-size: 1.1rem;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

       
        .error-message {
            color: #f00;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <a href="<?php echo e(route('user.index')); ?>">Listar</a>

    <h2>Editar Usuário</h2>

    <?php if($errors->any()): ?>
        <div class="error-message">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('user.edit', $user)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label>Nome: </label>
        <input type="text" name="name" placeholder="Nome completo" value="<?php echo e(old('name', $user->name)); ?>"><br>

        <label for="setor">Setor: </label>
        <select id="setor" name="setor" required>
            <option value="">-- Selecione o setor --</option>
            <option value="TI" <?php echo e(old('setor', $user->setor) == 'TI' ? 'selected' : ''); ?>>Tecnologia da Informação</option>
            <option value="ADM" <?php echo e(old('setor', $user->setor) == 'ADM' ? 'selected' : ''); ?>>Administração</option>
            <option value="PROJECT" <?php echo e(old('setor', $user->setor) == 'PROJECT' ? 'selected' : ''); ?>>Projetos</option>
        </select><br>

        <label for="cidade">Cidade (capital):</label>
        <select id="cidade" name="cidade" required>
            <option value="">-- Selecione a capital --</option>
            <option value="Rio Branco" <?php echo e(old('cidade', $user->cidade) == 'Rio Branco' ? 'selected' : ''); ?>>Rio Branco</option>
            <option value="Maceió" <?php echo e(old('cidade', $user->cidade) == 'Maceió' ? 'selected' : ''); ?>>Maceió</option>
            <option value="Macapá" <?php echo e(old('cidade', $user->cidade) == 'Macapá' ? 'selected' : ''); ?>>Macapá</option>
            <option value="Manaus" <?php echo e(old('cidade', $user->cidade) == 'Manaus' ? 'selected' : ''); ?>>Manaus</option>
            <option value="Salvador" <?php echo e(old('cidade', $user->cidade) == 'Salvador' ? 'selected' : ''); ?>>Salvador</option>
            <option value="Fortaleza" <?php echo e(old('cidade', $user->cidade) == 'Fortaleza' ? 'selected' : ''); ?>>Fortaleza</option>
            <option value="Brasília" <?php echo e(old('cidade', $user->cidade) == 'Brasília' ? 'selected' : ''); ?>>Brasília</option>
            <option value="Vitória" <?php echo e(old('cidade', $user->cidade) == 'Vitória' ? 'selected' : ''); ?>>Vitória</option>
            <option value="Goiânia" <?php echo e(old('cidade', $user->cidade) == 'Goiânia' ? 'selected' : ''); ?>>Goiânia</option>
            <option value="São Luís" <?php echo e(old('cidade', $user->cidade) == 'São Luís' ? 'selected' : ''); ?>>São Luís</option>
            <option value="Cuiabá" <?php echo e(old('cidade', $user->cidade) == 'Cuiabá' ? 'selected' : ''); ?>>Cuiabá</option>
            <option value="Campo Grande" <?php echo e(old('cidade', $user->cidade) == 'Campo Grande' ? 'selected' : ''); ?>>Campo Grande</option>
            <option value="Belo Horizonte" <?php echo e(old('cidade', $user->cidade) == 'Belo Horizonte' ? 'selected' : ''); ?>>Belo Horizonte</option>
            <option value="Belém" <?php echo e(old('cidade', $user->cidade) == 'Belém' ? 'selected' : ''); ?>>Belém</option>
            <option value="João Pessoa" <?php echo e(old('cidade', $user->cidade) == 'João Pessoa' ? 'selected' : ''); ?>>João Pessoa</option>
            <option value="Curitiba" <?php echo e(old('cidade', $user->cidade) == 'Curitiba' ? 'selected' : ''); ?>>Curitiba</option>
            <option value="Recife" <?php echo e(old('cidade', $user->cidade) == 'Recife' ? 'selected' : ''); ?>>Recife</option>
            <option value="Teresina" <?php echo e(old('cidade', $user->cidade) == 'Teresina' ? 'selected' : ''); ?>>Teresina</option>
            <option value="Rio de Janeiro" <?php echo e(old('cidade', $user->cidade) == 'Rio de Janeiro' ? 'selected' : ''); ?>>Rio de Janeiro</option>
            <option value="Natal" <?php echo e(old('cidade', $user->cidade) == 'Natal' ? 'selected' : ''); ?>>Natal</option>
            <option value="Porto Alegre" <?php echo e(old('cidade', $user->cidade) == 'Porto Alegre' ? 'selected' : ''); ?>>Porto Alegre</option>
            <option value="Porto Velho" <?php echo e(old('cidade', $user->cidade) == 'Porto Velho' ? 'selected' : ''); ?>>Porto Velho</option>
            <option value="Boa Vista" <?php echo e(old('cidade', $user->cidade) == 'Boa Vista' ? 'selected' : ''); ?>>Boa Vista</option>
            <option value="Florianópolis" <?php echo e(old('cidade', $user->cidade) == 'Florianópolis' ? 'selected' : ''); ?>>Florianópolis</option>
            <option value="São Paulo" <?php echo e(old('cidade', $user->cidade) == 'São Paulo' ? 'selected' : ''); ?>>São Paulo</option>
            <option value="Aracaju" <?php echo e(old('cidade', $user->cidade) == 'Aracaju' ? 'selected' : ''); ?>>Aracaju</option>
            <option value="Palmas" <?php echo e(old('cidade', $user->cidade) == 'Palmas' ? 'selected' : ''); ?>>Palmas</option>
        </select><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\SistemaRH\resources\views/users/edit.blade.php ENDPATH**/ ?>